package com.company;

import java.lang.reflect.Array;
import java.util.Arrays;
import java.util.Scanner;
import java.util.stream.Collectors;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] record = scanner.nextLine().split("://|/");

        if (record.length>1){
            System.out.printf("[protocol] = \"%s\"" + System.lineSeparator(), record[0]);
            System.out.printf("[server] = \"%s\"" + System.lineSeparator(), record[1]);
            String resources = "[resource] = \"" +
                    String.join("/"
                            , Arrays.stream(record).skip(2).collect(Collectors.toList()))+
                    "\"";

            System.out.println(resources);

        }else{
            System.out.printf("[protocol] = \"%s\"" + System.lineSeparator(), "");
            System.out.printf("[server] = \"%s\"" + System.lineSeparator(), record[0]);
            String resources = "[resource] = \"\"";

            System.out.println(resources);

        }



    }
}
