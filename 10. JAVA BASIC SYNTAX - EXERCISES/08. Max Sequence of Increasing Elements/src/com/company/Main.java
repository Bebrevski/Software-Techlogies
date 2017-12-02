package com.company;

import java.util.Arrays;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[] arr = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int countElements = 1;
        int maxSequence = 1;
        int index = 0;

        for (int i = 0; i < arr.length - 1; i++) {
            for (int j = i + 1; j < arr.length; j++) {
                if (arr[j - 1] < arr[j]) {
                    countElements++;
                    continue;

                } else {
                    break;
                }
            }

            if (countElements > maxSequence) {
                maxSequence = countElements;
                index = i;
            }
            countElements = 1;
        }

        PrintMaxSequence(arr, index, maxSequence);
    }

    private static void PrintMaxSequence(int[] arr, int index, int maxSequence) {

        for (int i = index; i < maxSequence + index; i++) {
            System.out.printf("" + arr[i] + " ");
        }
    }
}
