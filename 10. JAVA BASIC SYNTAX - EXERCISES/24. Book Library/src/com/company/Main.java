package com.company;

import javax.naming.Name;
import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.MonthDay;
import java.util.*;
import java.util.stream.Collectors;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        List<Book> books = new ArrayList<>();

        int n = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < n; i++) {

            String[] tokens = scanner.nextLine().split(" ");

            String title = tokens[0];
            String author = tokens[1];
            String publisher = tokens[2];
            String releaseDate = tokens[3];
            String ISBN = tokens[4];
            double price = Double.parseDouble(tokens[5]);

            Book currentBook = new Book(title, author, publisher, releaseDate, ISBN, price);

            books.add(currentBook);
        }

        List<String> names = books.stream()
                .map(Book::getAuthor)
                .distinct()
                .collect(Collectors.toList());

        List<Sum> averagePrices = new ArrayList<>();

        for (String name : names) {
            double sum = books.stream()
                    .filter(x -> x.getAuthor()
                            .compareTo(name) == 0)
                    .mapToDouble(Book::getPrice)
                    .sum();

            Sum currentSum = new Sum(name, sum);

            averagePrices.add(currentSum);
        }

        averagePrices.sort((p1, p2) -> {
            if (p1.getSum() == (p2.getSum())){
                return p1.getName().compareTo(p2.getName());
            }else{
                return Double.compare(p2.getSum(),p1.getSum());
            }
        });

        for (Sum pp : averagePrices) {
            System.out.printf("%s -> %.2f" + System.lineSeparator()
                    , pp.getName(), pp.getSum());
        }

    }
}

class Sum {
    private String name;
    private Double sum;

    public Sum(String name, Double sum) {
        this.name = name;
        this.sum = sum;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Double getSum() {
        return sum;
    }

    public void setSum(Double sum) {
        this.sum = sum;
    }
}

class Book {
    private String Title;
    private String Author;
    private String Publisher;
    private String RealeseDate;
    private String ISBN;
    private Double Price;

    Book(String title, String author, String publisher, String realeseDate, String ISBN, Double price) {
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

    Double getPrice() {
        return Price;
    }

    public void setPrice(Double price) {
        Price = price;
    }
}
