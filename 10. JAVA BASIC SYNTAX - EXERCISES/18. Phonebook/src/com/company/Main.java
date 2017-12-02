package com.company;

import java.util.LinkedHashMap;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        LinkedHashMap<String, String> record = new LinkedHashMap<>();

        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        while (!input.equals("END")) {

            String[] tokens = input.split(" ");

            String command = tokens[0];

            if (command.equals("A")) {

                String name = tokens[1];
                String phoneNumber = tokens[2];

                record.putIfAbsent(name, "");

                record.put(name, phoneNumber);

            } else {
                String name = tokens[1];

                if (record.containsKey(name)) {
                    System.out.printf("%1$s -> %2$s",name , record.get(name));
                    System.out.println();
                } else {
                    System.out.printf("Contact %s does not exist.", name);
                    System.out.println();
                }
            }

            input = scanner.nextLine();
        }
    }
}
