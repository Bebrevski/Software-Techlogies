package com.company;

import java.lang.reflect.Array;
import java.util.Arrays;
import java.util.Collection;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String[] arr = new String[3];

        for (int i = 0; i < 3; i++) {
            arr[i] = scan.nextLine();
        }

        ReverceArray(arr);

        SystemPrintArray(arr);
    }

    private static void SystemPrintArray(String[] arr) {
        for (int i = 0; i < arr.length; i++) {
            System.out.printf(arr[i]);
        }
    }

    private static void ReverceArray(String[] arr) {
        String temp = arr[0];
        arr[0] = arr[arr.length - 1];
        arr[arr.length - 1] = temp;
    }
}
