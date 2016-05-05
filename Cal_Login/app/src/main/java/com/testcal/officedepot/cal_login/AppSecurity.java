package com.testcal.officedepot.cal_login;

import android.Manifest;
import android.app.Application;
import android.content.Context;
import android.content.pm.PackageManager;
import android.os.SystemClock;
import android.support.v4.content.ContextCompat;

import java.util.Timer;

/**
 * Created by Sarah McBride on 3/3/2016.
 */
public class AppSecurity extends Application {
    private String userName, userID, devID;
    private String lockPwd, unlockPwd;
    private SystemClock secClock;
    private float totalTime = 0;
    private long startTime = secClock.elapsedRealtime(), pauseTime;

    public boolean enterSecureMode(String name) {
        ContextCompat newcon = new ContextCompat();
        String wifiPermission = Manifest.permission.CHANGE_WIFI_STATE;//ACCESS_FINE_LOCATION;
        int hasPermission = newcon.checkSelfPermission(getApplicationContext(), wifiPermission);
        String[] permissions = new String[] { wifiPermission };
        if (hasPermission != PackageManager.PERMISSION_GRANTED) {
            //requestPermissions(permissions, REQUEST_LOCATION);
        }
        return true;
    }
    public float getTotalTime() {
        return totalTime;
    }
    public void updateTotalTime(float t) {
        totalTime += t;
    }
    public void updatePauseTime() {
        pauseTime = secClock.currentThreadTimeMillis();
    }
    public void updateResumeTime() {
        updateTotalTime((secClock.currentThreadTimeMillis() - pauseTime) / 1000);
    }
    public void setLockPwd(String newPwd) {
        lockPwd = newPwd;
    }
    public void setUnlockPwd(String newPwd) {
        unlockPwd = newPwd;
    }
    public String getLockPwd() {
        return lockPwd;
    }
    public String getUnlockPwd() {
        return unlockPwd;
    }
    public boolean checkLockPwd(String newPwd) {
        if (newPwd.matches(lockPwd)) {
            return true;
        } else {
            return false;
        }
    }
    public boolean checkUnlockPwd(String newPwd) {
        if (newPwd.matches(unlockPwd)) {
            return true;
        } else {
            return false;
        }
    }
}
