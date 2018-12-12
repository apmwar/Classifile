package io.github.apmwar.classifile;

import android.content.Context;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;
import java.io.BufferedReader;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;

public class MainActivity extends AppCompatActivity {

    final public int images[] = {R.drawable.img1, R.drawable.img2, R.drawable.img3, R.drawable.img4, R.drawable.img5,
            R.drawable.img6, R.drawable.img7, R.drawable.img8, R.drawable.img9, R.drawable.img10,
            R.drawable.img11, R.drawable.img12, R.drawable.img13, R.drawable.img14, R.drawable.img15,};

    final private String URLS[] = {"img1.jpg", "img2.PNG", "img3.jpg", "img4.jpg", "img5.jpg",
            "img6.png", "img7.jpg", "img8.PNG", "img9.jpg", "img10.jpg",
            "img11.jpg", "img12.jpg", "img13.png", "img14.png", "img15.jpg"};

    private int total = images.length;

    Button button1;
    Button button2;
    Button button3;
    Button button4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //!!!!!!11!!!!!!
        //extractText();

        button1 = (Button) findViewById(R.id.GalleryButton);
        button2 = (Button) findViewById(R.id.ListButton);
        button3 = (Button) findViewById(R.id.SearchButton);
        button4 = (Button) findViewById(R.id.CategoriesButton);

        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                openGalleryActivity();
            }
        });
        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                openListActivity();
            }
        });
        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                openSearchActivity();
            }
        });
        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                openCategoriesActivity();
            }
        });
    }

    public void save(String filename, String fileContents) {
        FileOutputStream outputStream;
        //Toast.makeText(this,"The save method is invoked", Toast.LENGTH_LONG).show();
        try {
            outputStream = openFileOutput(filename, Context.MODE_PRIVATE);
            outputStream.write(fileContents.getBytes());
            outputStream.close();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    public String parsed(String s) {
        int startIndex = 0;
        int endIndex = 0;
        for(int i = 0; i < s.length(); i++) {
            if(s.charAt(i) == 'P' && s.charAt(i+1) == 'a' && s.charAt(i+2) == 'r' && s.charAt(i+3) == 's' &&
                    s.charAt(i+4) == 'e' && s.charAt(i+5) == 'd' && s.charAt(i+6) == 'R'){
                startIndex = i+13;
                break;
            }
        }
        for(int i = startIndex; i < s.length(); i++) {
            if(s.charAt(i) == '"' && s.charAt(i+1) == ',' && s.charAt(i+2) == '"' && s.charAt(i+3) == 'E' &&
                    s.charAt(i+4) == 'r' && s.charAt(i+5) == 'r' && s.charAt(i+6) == 'r' && s.charAt(i+7) == 'o'  && s.charAt(i+8) == 'r' && s.charAt(i+9) == 'M'){
                endIndex = i-1;
                break;
            }
        }
        String news = s.substring(startIndex, endIndex);
        return s;
    }

    public void extractText() {

        Thread thread = new Thread(new Runnable() {

            @Override
            public void run() {
                try {

                    for (int i = 0; i < total; i++) {
                        String data = "";
                        String newURL = (String)"https://api.ocr.space/parse/imageurl?apikey=194f1cb82c88957&url=https://raw.githubusercontent.com/apmwar/classifile/master/Document%20Images/" + URLS[i];


                        try {
                            //URL myURL = new URL("https://api.ocr.space/parse/imageurl?apikey=194f1cb82c88957&url=https://github.com/apmwar/classifile/blob/master/Sample%20Document%20Images/img4.jpg?raw=true");
                            URL myURL = new URL(newURL);

                            HttpURLConnection http = (HttpURLConnection) myURL.openConnection();

                            http.connect();

                            InputStream inputStream = http.getInputStream();
                            BufferedReader b = new BufferedReader(new InputStreamReader(inputStream));
                            String text = "";
                            while (text != null) {
                                text = b.readLine();
                                data = data + text;
                            }

                            save("img" + (i+1) + ".txt", data);

                        } catch (MalformedURLException e) {
                            e.printStackTrace();
                        } catch (IOException e) {
                            e.printStackTrace();
                        }
                    }
                } catch(Exception e){
                    e.printStackTrace();
                }
            }
        });

        thread.start();


    }

    public void openGalleryActivity() {
        Intent intent = new Intent(this, GalleryActivity.class);
        intent.putExtra("array", images);
        startActivity(intent);
    }

    public void openListActivity() {
        Intent intent = new Intent(this, ListActivity.class);
        startActivity(intent);
    }

    public void openSearchActivity() {
        Intent intent = new Intent(this, SearchActivity.class);
        startActivity(intent);
    }

    public void openCategoriesActivity() {
        Intent intent = new Intent(this, CategoriesActivity.class);
        startActivity(intent);
    }
}