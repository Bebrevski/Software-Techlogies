package com.company;

import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class Main {

    public static void main(String[] args) {
	Scanner scan = new Scanner(System.in);

        List<Integer> arr = Arrays
                .stream(scan.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

	    if (arr.size() == 1) {
            System.out.println(0);
            return;
        }

        for (int i = 0; i < arr.size(); i++) {
            List<Integer> leftPart = arr.stream().limit(i).collect(Collectors.toList());
            List<Integer> rightPart = arr.stream().skip(i + 1).limit(arr.size() - i - 1).collect(Collectors.toList());

            int leftSum = leftPart.stream().mapToInt(Integer::intValue).sum();
            int rightSum = rightPart.stream().mapToInt(Integer::intValue).sum();

            if (leftSum == rightSum) {

                System.out.println(i);
                return;
            }
        }
        System.out.println("no");
    }
}
