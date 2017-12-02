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

        int counter = 1;
        int maxCount = 1;
        int element = arr[0];

        for (int i = 0; i < arr.length - 1; i++) {
            for (int j = i + 1; j < arr.length; j++) {
                if (arr[i] == arr[j]) {
                    counter++;
                }
            }

            if (counter > maxCount) {
                maxCount = counter;
                element = arr[i];
            }
            counter = 1;
        }

        PrintMostFrequendNumber(element);
    }

    private static void PrintMostFrequendNumber(int element) {
        System.out.println(element);
    }
}
