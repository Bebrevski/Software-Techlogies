package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String[] arr1 = scan.nextLine().split(" ");
        String[] arr2 = scan.nextLine().split(" ");

        if (arr1.length != arr2.length) {
            PrintArraysStartingWithShorter(arr1, arr2);
            return;
        }

        boolean areEqual = CompareArrays(arr1, arr2);

        if (areEqual) {
            System.out.println(String.join("", arr1));
            System.out.println(String.join("", arr2));
        } else {
            PrintArraysLexicographically(arr1, arr2);
        }
    }

    private static void PrintArraysLexicographically(String[] arr1, String[] arr2) {

        for (int i = 0; i < arr1.length; i++) {
            if (arr1[i].compareTo(arr2[i]) == 0) {
                continue;
            } else if (arr1[i].compareTo(arr2[i]) < 0) {
                System.out.println(String.join("", arr1));
                System.out.println(String.join("", arr2));
                return;
            } else {
                System.out.println(String.join("", arr2));
                System.out.println(String.join("", arr1));
                return;
            }
        }
    }

    private static Boolean CompareArrays(String[] arr1, String[] arr2) {

        for (int i = 0; i < arr1.length; i++) {
            if (arr1[i].compareTo(arr2[i]) == 0) {
                continue;
            } else {
                return false;
            }
        }

        return true;
    }

    private static void PrintArraysStartingWithShorter(String[] arr1, String[] arr2) {
        if (arr1.length < arr2.length) {
            System.out.println(String.join("", arr1));
            System.out.println(String.join("", arr2));
        } else {
            System.out.println(String.join("", arr2));
            System.out.println(String.join("", arr1));
        }
    }
}
