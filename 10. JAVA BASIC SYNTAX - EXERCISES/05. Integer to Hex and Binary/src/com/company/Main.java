package com.company;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int n = Integer.parseInt(scan.nextLine());

        String hex = ConvertToHex(n);
        String bin = ConvetToBinary(n);

        System.out.println(hex.toUpperCase());
        System.out.println(bin);
    }

    private static String ConvetToBinary(int n) {
        return Integer.toBinaryString(n);
    }

    private static String ConvertToHex(int n) {
        return Integer.toHexString(n);
    }
}
