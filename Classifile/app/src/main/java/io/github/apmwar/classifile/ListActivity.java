package io.github.apmwar.classifile;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;

import java.util.List;

public class ListActivity extends AppCompatActivity {

    private ListView listView;

    public int images[] = {R.drawable.img1, R.drawable.img2, R.drawable.img3, R.drawable.img4, R.drawable.img5,
            R.drawable.img6, R.drawable.img7, R.drawable.img8, R.drawable.img9, R.drawable.img10,
            R.drawable.img11, R.drawable.img12, R.drawable.img13, R.drawable.img14, R.drawable.img15,};

    public String name[] = {"Image 1", "Image 2", "Image 3", "Image 4", "Image 5",
            "Image 6", "Image 7", "Image 8", "Image 9", "Image 10",
            "Image 11", "Image 12", "Image 13", "Image 14", "Image 15"};

    public String modified[] = {"04/01/18", "14/05/18", "23/02/15", "25/12/16", "18/10/18",
            "04/07/15", "29/11/16", "31/01/16", "11/03/18", "04/01/18",
            "29/01/16", "18/07/17", "15/08/16", "15/06/18", "04/04/17",};

    public String size[] = {"358KB", "422KB", "827KB", "155KB", "182KB",
            "68KB", "492KB", "271KB", "80KB", "68KB",
            "21KB", "130KB", "114KB", "59KB", "39KB"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list);

        listView = (ListView) findViewById(R.id.listView);

        ListAdapter listAdapter = new ListAdapter(this, name, modified, size, images);

        listView.setAdapter(listAdapter);

        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int position, long id) {
                Intent i = new Intent(getApplicationContext(), ViewImage.class);
                i.putExtra("id", position);
                i.putExtra("array", images);
                startActivity(i);
            }
        });



    }
}
