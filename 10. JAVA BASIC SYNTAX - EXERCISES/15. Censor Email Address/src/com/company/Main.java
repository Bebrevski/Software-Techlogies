package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String email = scanner.nextLine();
        String nameOfEmail = email.substring(0, email.indexOf("@"));
        String domain = email.substring(email.indexOf("@"), email.length());

        String text = scanner.nextLine();

        String replacer = ReplaceEmailWithAsterics(nameOfEmail, domain);

        text = text.replaceAll(email, replacer);

        System.out.println(text);
    }

    private static String ReplaceEmailWithAsterics(String nameOfEmail, String domain) {
        StringBuilder rep = new StringBuilder();
        for (int i = 0; i < nameOfEmail.length(); i++) {
            rep.append("*");
        }
        rep.append(domain);
        return rep.toString();
    }
}
