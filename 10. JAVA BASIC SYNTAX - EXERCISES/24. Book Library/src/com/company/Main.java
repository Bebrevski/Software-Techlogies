package com.company;

import javax.naming.Name;
import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.MonthDay;
import java.util.*;

class Book {
    private String Title;
    private String Author;
    private String Publisher;
    private String RealeseDate;
    private String ISBN;
    private Double Price;

    public Book(String title, String author, String publisher, String realeseDate, String ISBN, Double price) {
        Title = title;
        Author = author;
        Publisher = publisher;
        RealeseDate = realeseDate;
        this.ISBN = ISBN;
        Price = price;
    }

    public String getTitle() {
        return Title;
    }

    public void setTitle(String title) {
        Title = title;
    }

    public String getAuthor() {
        return Author;
    }

    public void setAuthor(String author) {
        Author = author;
    }

    public String getPublisher() {
        return Publisher;
    }

    public void setPublisher(String publisher) {
        Publisher = publisher;
    }

    public String getRealeseDate() {
        return RealeseDate;
    }

    public void setRealeseDate(String realeseDate) {
        RealeseDate = realeseDate;
    }

    public String getISBN() {
        return ISBN;
    }

    public void setISBN(String ISBN) {
        this.ISBN = ISBN;
    }

    public Double getPrice() {
        return Price;
    }

    public void setPrice(Double price) {
        Price = price;
    }
}

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int n = Integer.parseInt(scanner.nextLine());

        HashMap<String, List<Book>> record = new HashMap<>();

        for (int i = 0; i < n; i++) {

            String[] tokens = scanner.nextLine().split(" ");

            String title = tokens[0];
            String author = tokens[1];
            String publisher = tokens[2];
            String releaseDate = tokens[3];
            String ISBN = tokens[4];
            double price = Double.parseDouble(tokens[5]);

            Book currentBook = new Book(title, author, publisher, releaseDate, ISBN, price);

            record.putIfAbsent(author, new ArrayList<>());

            record.get(author).add(currentBook);
        }

        record.entrySet().stream().sorted((pair1 ,pair2) -> {
            if (
                    Double.compare(
                            pair1.getValue().stream().mapToDouble(x->x.getPrice()).sum()/pair1.getValue().size(),
                                pair2.getValue().stream().mapToDouble(x->x.getPrice()).sum()/pair1.getValue().size())==0)
            {
                return  pair1.getKey().compareTo(pair2.getKey());
            }
            return pair2.getKey().compareTo(pair1.getKey());
        });

        for (Map.Entry<String, List<Book>> kvp : record.entrySet()) {
            System.out.printf(kvp.getKey() + " -> ");

            double ave = 0;
            for (int i = 0; i < kvp.getValue().size(); i++) {
                ave += kvp.getValue().get(i).getPrice();
            }

            System.out.println(ave);
        }
    }
}
