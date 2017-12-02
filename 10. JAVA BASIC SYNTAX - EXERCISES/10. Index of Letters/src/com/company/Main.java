package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
	Scanner scan = new Scanner(System.in);

	String input = scan.nextLine().toLowerCase();

        for (int i = 0; i < input.length(); i++) {
            System.out.printf("%s -> %d",input.charAt(i), input.charAt(i) - 'a');
            System.out.println();
        }
    }
}
