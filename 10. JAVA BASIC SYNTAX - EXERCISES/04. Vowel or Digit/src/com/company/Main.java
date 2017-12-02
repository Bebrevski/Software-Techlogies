package com.company;

import java.lang.reflect.Array;
import java.util.List;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String input = scan.nextLine();
        char n = input.charAt(0);

        if (n == 'a' || n == 'e' || n == 'o' || n == 'u' || n == 'i') {
            System.out.println("vowel");
        } else if (Character.isDigit(n)) {
            System.out.println("digit");
        } else {
            System.out.println("other");
        }
    }
}
