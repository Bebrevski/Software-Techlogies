package com.company;

import java.util.*;

public class Main {

    public static void main(String[] args) {
        SortedMap<String, String> record = new TreeMap<>();

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

            } else if (command.equals("S")) {
                String name = tokens[1];

                if (record.containsKey(name)) {
                    System.out.printf("%1$s -> %2$s", name, record.get(name));
                    System.out.println();
                } else {
                    System.out.printf("Contact %s does not exist.", name);
                    System.out.println();
                }
            } else {
                String listAll = tokens[0];

                for (Map.Entry<String, String> person : record.entrySet()) {
                    System.out.printf("%1$s -> %2$s%n"
                            , person.getKey()
                            , person.getValue());
                }
            }

            input = scanner.nextLine();
        }
    }
}
