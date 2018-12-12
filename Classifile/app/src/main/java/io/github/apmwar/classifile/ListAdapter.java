package io.github.apmwar.classifile;

import android.app.Activity;
import android.content.Context;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

public class ListAdapter extends ArrayAdapter<String> {

    private String name[];
    private String modified[];
    private String size[];
    private int images[];

    private Activity context;

    public ListAdapter(Activity context, String name[], String[] modified, String[] size, int[] images) {
        super(context, R.layout.listitem, name);
        this.name = name;
        this.modified = modified;
        this.size = size;
        this.images = images;
        this.context = context;
    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {

        View view = convertView;
        ViewHolder viewHolder = null;

        if(view == null) {
            LayoutInflater layoutInflater = context.getLayoutInflater();
            view = layoutInflater.inflate(R.layout.listitem, null, true);
            viewHolder = new ViewHolder(view);
            view.setTag(viewHolder);
        } else {

            viewHolder = (ViewHolder) view.getTag();
        }

        viewHolder.imageView.setImageResource(images[position]);
        viewHolder.textView1.setText(name[position]);
        viewHolder.textView2.setText("Date Modified: " + modified[position]);
        viewHolder.textView3.setText("File Size: " + size[position]);

        return view;
    }

    class ViewHolder {
        TextView textView1;
        TextView textView2;
        TextView textView3;
        ImageView imageView;

        ViewHolder(View v) {
            textView1 = (TextView) v.findViewById(R.id.listText);
            textView2 = (TextView) v.findViewById(R.id.listDate);
            textView3 = (TextView) v.findViewById(R.id.listSize);
            imageView = (ImageView) v.findViewById(R.id.listImage);
        }
    }
}
