package com.company;

import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        List<Integer> sequence = Arrays
                .stream(scan.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        int[] arr = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int bomb = arr[0];
        int power = arr[1];

        int index = sequence.indexOf(bomb);

        for (int i = 0; i < sequence.size(); i++) {
            if (sequence.get(i) == bomb) {
                int left = Math.max(i - power, 0);
                int right = Math.min(i + power, sequence.size() - 1);

                sequence.subList(left, right + 1).clear();

                i = 0;
            }
        }

        System.out.println(sequence.stream().mapToInt(Integer::intValue).sum());
    }
}
