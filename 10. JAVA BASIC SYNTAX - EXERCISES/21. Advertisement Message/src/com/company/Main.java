package com.company;

import java.util.Random;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] phrases = {"Excellent product.",
                "Such a great product.",
                "I always use that product.",
                "Best product of its category.",
                "Exceptional product.",
                "I can't live without this product."};

        String[] events = {"Now I feel good.",
                "I have succeeded with this product.",
                "Makes miracles. I am happy of the results!",
                "I cannot believe but now I feel awesome.",
                "Try it yourself, I am very satisfied.",
                "I feel great!"};

        String[] author = {"Diana", "Petya", "Stella", "Elena", "Katya", "Iva", "Annie", "Eva"};

        String[] cities = {"Burgas", "Sofia", "Plovdiv", "Varna", "Ruse"};

        Random randomMsg = new Random();

        int lines = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < lines; i++) {

            int randPhrases = randomMsg.nextInt(4);
            System.out.printf(phrases[randPhrases] + " ");

            int randEvent = randomMsg.nextInt(4);
            System.out.printf(events[randEvent] + " ");

            int randAuthor = randomMsg.nextInt(4);
            System.out.printf(author[randAuthor] + " - ");

            int randcity = randomMsg.nextInt(4);
            System.out.println(cities[randcity]);
        }
    }
}
