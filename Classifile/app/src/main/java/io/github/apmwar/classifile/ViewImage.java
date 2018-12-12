package io.github.apmwar.classifile;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.widget.ImageView;

public class ViewImage extends AppCompatActivity {

    public int images[];

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_view_image);

        Intent i = getIntent();

        int position = i.getExtras().getInt("id");
        this.images = i.getExtras().getIntArray("array");
        ImageAdapter imageAdapter = new ImageAdapter(this, images);

        ImageView imageView =  (ImageView)findViewById(R.id.imageZoom);
        imageView.setImageResource(imageAdapter.images[position]);
    }


}
