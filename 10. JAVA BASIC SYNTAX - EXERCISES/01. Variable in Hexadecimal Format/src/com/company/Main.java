package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        int convertedInt = Integer.parseInt(input, 16);

        System.out.println(convertedInt);
    }
}
