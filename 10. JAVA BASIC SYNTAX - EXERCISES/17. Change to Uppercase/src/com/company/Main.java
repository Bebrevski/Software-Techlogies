package com.company;

import java.util.Arrays;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        String openTag = "<upcase>";
        String closeTag = "</upcase>";

        int indexOpen = input.indexOf(openTag);
        int indexClose = input.indexOf(closeTag);

        while (indexOpen != -1 && indexClose != -1) {
            String pieceOfText = input.substring(indexOpen + openTag.length(), indexClose);

            input = input.replace(openTag + pieceOfText + closeTag
                    , pieceOfText.toUpperCase());

            indexOpen = input.indexOf(openTag);
            indexClose = input.indexOf(closeTag);
        }

        System.out.println(input);
    }
}
