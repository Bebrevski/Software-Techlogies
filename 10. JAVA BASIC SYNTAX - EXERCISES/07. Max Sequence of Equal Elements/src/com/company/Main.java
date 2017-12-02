package com.company;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        Integer[] arr = Arrays
                .stream(scan.nextLine().split(" "))
                .map(Integer::parseInt)
                .toArray(Integer[]::new);

        int currentNum = arr[0];
        int counter = 1;
        int maxCount = 1;

        for (int i = 0; i < arr.length - 1; i++) {

            for (int j = i + 1; j < arr.length; j++) {
                if (arr[i].equals(arr[j])) {
                    counter++;
                    continue;
                } else {
                    break;
                }
            }
            if (counter > maxCount) {
                maxCount = counter;
                currentNum = arr[i];
            }
            counter = 1;
        }
        PrintMaxSequence(maxCount, currentNum);
    }

    private static void PrintMaxSequence(int maxCount, int currentNum) {
        for (int i = 0; i < maxCount; i++) {
            System.out.printf("" + currentNum + " ");
        }
    }
}
