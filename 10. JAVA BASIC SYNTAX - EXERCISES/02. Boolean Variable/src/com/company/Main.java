package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        Boolean output = Boolean.parseBoolean(input);

        if (output) {
            System.out.println("Yes");
        } else {
            System.out.println("No");
        }
    }
}
