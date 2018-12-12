package io.github.apmwar.classifile;

import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.app.Activity;
import android.util.Log;
import android.view.View;
import android.view.inputmethod.InputMethodManager;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.GridView;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;

public class SearchActivity extends Activity {

    EditText keyword;
    String searchKeyword;
    Button searchButton;

    RadioButton a;
    RadioButton b;
    
    RadioGroup radioGroup;

    final public int images[] = {R.drawable.img1, R.drawable.img2, R.drawable.img3, R.drawable.img4, R.drawable.img5,
            R.drawable.img6, R.drawable.img7, R.drawable.img8, R.drawable.img9, R.drawable.img10,
            R.drawable.img11, R.drawable.img12, R.drawable.img13, R.drawable.img14, R.drawable.img15,};

    final public String names[] = {"img1", "img2", "img3", "img4", "img5",
            "img6", "img7", "img8", "img9", "img10",
            "img11", "img12", "img13", "img14", "img15"};

    int foundImages[] = new int[images.length];
    int flag = 0;
    int mode = 1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_search);


        radioGroup = (RadioGroup) findViewById(R.id.radioGrp);
        
        a = (RadioButton) findViewById(R.id.keywordradio);
        b = (RadioButton) findViewById(R.id.filenameradio); 

        keyword = (EditText) findViewById(R.id.searchWord);
        searchButton = (Button) findViewById(R.id.searchButton);

        a.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                mode = 1;
                Toast.makeText(SearchActivity.this, "Keyword Search Selected", Toast.LENGTH_SHORT).show();
                
            }
        });

        b.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                mode = 2;
                Toast.makeText(SearchActivity.this, "Filename Search Selected", Toast.LENGTH_SHORT).show();
            }
        });

        searchButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                flag = 0;
                for(int a = 0; a < images.length; a++) { foundImages[a] = 0; }
                searchKeyword = keyword.getText().toString();
                if(mode == 1) {
                    if(searchKeyword.length() > 1)
                        display();
                }
                else { filenamedisplay(); }
            }
        });
    }

    public void filenamedisplay() {

        int retrievedImages[] = new int[1];

        int x = 0;

        for(int j = 0; j < names.length; j++) {
            if(names[j].equals(searchKeyword)) {
                retrievedImages[0] = images[j];
                x++;
                break;
            }
        }

        if(x == 0) {

            Toast.makeText(this, "No matching images found", Toast.LENGTH_SHORT).show();

        } else {

            Intent i = new Intent(getApplicationContext(), GalleryActivity.class);
            i.putExtra("array", retrievedImages);
            startActivity(i);
        }
    }

    public void display() {
        for(int i = 1; i <= 15; i++) {
            if(containsKeyword(i)) {
                flag++;
            }
        }
        if(flag > 0) {
            final int retrievedImages[] = new int[flag];
            for(int j = 0; j < flag; j++) {
                if(foundImages[j] == 0) { break; }
                retrievedImages[j] = foundImages[j];
            }

            Intent i = new Intent(getApplicationContext(), GalleryActivity.class);
            i.putExtra("array", retrievedImages);
            startActivity(i);
        }

        Toast.makeText(this,"Found " + flag+ " image(s) matching keyword", Toast.LENGTH_LONG).show();
    }

    public boolean containsKeyword(int i) {

        String fileName = "img" + i + ".txt";
        String data = "";
        FileInputStream fileInputStream = null;
        int ch;
        StringBuffer stringBuffer = new StringBuffer();
        try {
            // create FileInputStream object
            fileInputStream = openFileInput(fileName);
            // Read bytes of data from this input stream
            while((ch = fileInputStream.read()) != -1) {
                stringBuffer.append((char)ch);
            }
            data = stringBuffer.toString();
        } catch (FileNotFoundException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        } finally {

            try {
                if (fileInputStream != null) {
                    fileInputStream.close();
                }
            } catch (IOException e) {
                e.printStackTrace();
            }
        }

        if(data.contains(searchKeyword)) {
            foundImages[flag] = images[i-1];
            return true;
        }
        return false;
    }
}
