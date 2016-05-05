package com.newcalculator.ash.newcalculator;


import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Math extends Activity{

    String total ="";
    double v1, v2;
    String sign = "";
    String answer = "";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        // Set the layout for the layout we created
        setContentView(R.layout.second_layout);

        // Get the Intent that called for this Activity to open

        Intent activityThatCalled = getIntent();

        // Get the data that was sent

        String previousActivity = activityThatCalled.getExtras().getString("callingActivity");

        TextView callingActivityMessage = (TextView)
                findViewById(R.id.calling_activity_info_text_view);

        callingActivityMessage.append(" " + previousActivity);
    }

    public void onClick (View v) {
        Button button = (Button) v;
        String str = button.getText().toString();
        total+=str;
        EditText edit = (EditText)findViewById(R.id.users_name_edit_text);
        edit.setText(total);
    }
    public void onEnter(View v){
        Parser parser = new Parser();
        try
        {
            ExpressionNode expr = parser.parse(total);
            expr.accept(new SetVariable("pi", Math.PI));
            answer = Double.toString(expr.getValue());
            EditText edit = (EditText)findViewById(R.id.users_name_edit_text);
            edit.setText(answer);

        }
        catch (ParserException e)
        {
            //System.out.println(e.getMessage());
            answer = "ERROR";
            EditText edit = (EditText)findViewById(R.id.users_name_edit_text);
            edit.setText(answer);
        }
        catch (EvaluationException e)
        {
            //System.out.println(e.getMessage());
            answer = "ERROR";
            EditText edit = (EditText)findViewById(R.id.users_name_edit_text);
            edit.setText(answer);
        }
        total = "";
    }
    public void onDel(View v){
        //Button button = (Button) v;
        //String str = button.getText().toString();
        if (total.length() > 0) {
            total = total.substring(0, total.length() - 1);
            EditText edit = (EditText) findViewById(R.id.users_name_edit_text);
            edit.setText(total);
        }
    }
    public void onClear(View v){
        total = "";
        EditText edit = (EditText) findViewById(R.id.users_name_edit_text);
        edit.setText(total);
    }

    public void onMath(View view) {

        // Get the users name from the EditText
        //EditText usersNameET = (EditText) findViewById(R.id.users_name_edit_text);

        // Get the name typed into the EditText
        //String usersName = String.valueOf(usersNameET.getText());

        // Define our intention to go back to ActivityMain
        Intent goingBack = new Intent();

        // Define the String name and the value to assign to it
        goingBack.putExtra("UsersName", usersName);

        // Sends data back to the parent and can use RESULT_CANCELED, RESULT_OK, or any
        // custom values starting at RESULT_FIRST_USER. RESULT_CANCELED is sent if
        // this Activity crashes
        setResult(RESULT_OK, goingBack);

        // Close this Activity
        finish();

    }
}