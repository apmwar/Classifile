package io.github.apmwar.classifile;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.GridView;
import android.widget.Toast;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;

public class CategoriesActivity extends AppCompatActivity {

    final public int images[] = {R.drawable.img1, R.drawable.img2, R.drawable.img3, R.drawable.img4, R.drawable.img5,
            R.drawable.img6, R.drawable.img7, R.drawable.img8, R.drawable.img9, R.drawable.img10,
            R.drawable.img11, R.drawable.img12, R.drawable.img13, R.drawable.img14, R.drawable.img15};

    Button billDocs;
    Button idDocs;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_categories);

        billDocs = (Button) findViewById(R.id.billdocs);
        idDocs = (Button) findViewById(R.id.iddocs);

        billDocs.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                displayBillDocs();
            }
        });

        idDocs.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                displayIdDocs();
            }
        });
    }

    public void displayIdDocs() {

        int idImages[] = new int[images.length];
        for(int i = 0; i < images.length; i++) { idImages[i] = 0; }

        int flag = 0;

        String BoW[] = {"Name", "NAME", "name", "DOB", "Date of Birth", "DATE OF BIRTH", "CITIZEN", "DATE OF ISSUE", "DATE OF EXPIRY", "Date of Issue", "Date of Expiry", "Date of issue", "Date of expiry", "Male", "Female", "MALE", "FEMALE", "Permanent Account Number", "Signature", "GOVT. OF INDIA", "AADHAR"};
        int len = BoW.length;

        for(int i = 1; i <= 15; i++) {
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
            int count = 0;
            for(int j = 0; j < len; j++) {
                if(data.contains(BoW[j])) { count++; }
            }
            if(count > 1) {
                idImages[flag] = images[i-1];
                flag++;
            }
        }


        final int arr[] = new int[flag];
        int k = 0;
        for(int i = 0; i < flag; i++) {
            if(idImages[i] != 0){
                arr[k] = idImages[i];
                k++;
            }
        }

        Intent i = new Intent(getApplicationContext(), GalleryActivity.class);
        i.putExtra("array", arr);
        startActivity(i);
    }


    public void displayBillDocs() {

        int billImages[] = new int[images.length];
        for(int i = 0; i < images.length; i++) { billImages[i] = 0; }

        int flag = 0;

        String BoW[] = {"TAX", "tax", "Tax", "TOTAL", "total", "Total", "GST", "Cash", "CASH"};
        int len = BoW.length;

        for(int i = 1; i <= 15; i++) {
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
            int count = 0;
            for(int j = 0; j < len; j++) {
                if(data.contains(BoW[j])) { count++; }
            }
            if(count > 1) {
                billImages[flag] = images[i-1];
                flag++;
            }
        }


        final int arr[] = new int[flag];
        int k = 0;
        for(int i = 0; i < flag; i++) {
            if(billImages[i] != 0){
                arr[k] = billImages[i];
                k++;
            }
        }

        Intent i = new Intent(getApplicationContext(), GalleryActivity.class);
        i.putExtra("array", arr);
        startActivity(i);
    }
}
