package com.company;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.*;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        Library library = new Library("Current Library", new ArrayList<Book>());
        SimpleDateFormat dateFormat = new SimpleDateFormat("dd.MM.yyyy");
        int inputLines = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < inputLines; i++) {
            String[] bookData = scanner.nextLine().split(" ");

            // Books in the input will be in format {title} {author} {publisher} {release date} {ISBN} {price}.
            String title = bookData[0];
            String author = bookData[1];
            String publisher = bookData[2];
            Calendar releaseDate = Calendar.getInstance();
            try {
                releaseDate.setTime(dateFormat.parse(bookData[3]));
            } catch (ParseException e) {
                System.out.println("Invalid Date. Try again!");
                continue;
            }

            String isbn = bookData[4];
            double price = Double.parseDouble(bookData[5]);

            Book currentBook = new Book(title, author, publisher, releaseDate, isbn, price);
            library.getBooks().add(currentBook);
        }

        /* Previous Exercise
        PrintByPricePerAuthor(library);
         */

        Calendar dateAfter = Calendar.getInstance();
        try {
            dateAfter.setTime(dateFormat.parse(scanner.nextLine()));
        } catch (ParseException e) {
            System.out.println("Invalid Date. Try again!");
        }

        PrintTitlesAfterDate(library, dateAfter, dateFormat);
    }

    private static void PrintTitlesAfterDate(Library library, Calendar dateAfter, SimpleDateFormat dateFormat) {
        HashMap<String, Calendar> titleDate = new HashMap<String, Calendar>();

        for (Book book : library.getBooks()) {
            if (book.getReleaseDate().compareTo(dateAfter) > 0) {
                titleDate.put(book.getTitle(), book.getReleaseDate());
            }
        }

        // Sorting by Date and then by Title lexicographically
        Map<String, Calendar> sortedTitlesByDate = new LinkedHashMap<>();
        titleDate.entrySet().stream()
                .sorted(Map.Entry.<String, Calendar>comparingByKey())
                .sorted(Map.Entry.<String, Calendar>comparingByValue())
                .forEachOrdered(b -> System.out.printf("%s -> %s\n", b.getKey(), dateFormat.format(b.getValue().getTime())));
    }

    private static void PrintByPricePerAuthor(Library library) {
        HashMap<String, Double> authorPrice = new HashMap<String, Double>();

        for (Book book : library.getBooks()) {
            String currentAuthor = book.getAuthor();
            if (!authorPrice.containsKey(currentAuthor)) {
                authorPrice.put(currentAuthor, book.getPrice());
                continue;
            }

            authorPrice.put(currentAuthor, authorPrice.get(currentAuthor) + book.getPrice());
        }

        // Sorting by Price and then by Author
        Map<String, Double> sortedAuhorsByPrice = new LinkedHashMap<>();
        authorPrice.entrySet().stream()
                .sorted(Map.Entry.<String, Double>comparingByKey())
                .sorted(Map.Entry.<String, Double>comparingByValue().reversed())
                .forEachOrdered(x -> sortedAuhorsByPrice.put(x.getKey(), x.getValue()));

        // Printing he result
        sortedAuhorsByPrice.forEach((key, val) -> System.out.printf("%s -> %1.2f\n", key, val));
    }

    public static class Library {
        private String Name;
        private ArrayList<Book> Books;

        public Library(String name, ArrayList<Book> books) {
            Name = name;
            Books = books;
        }

        public String getName() {
            return Name;
        }

        public void setName(String name) {
            Name = name;
        }

        public ArrayList<Book> getBooks() {
            return Books;
        }

        public void setBooks(ArrayList<Book> books) {
            Books = books;
        }
    }

    public static class Book {
        private String Title;
        private String Author;
        private String Publisher;
        private Calendar ReleaseDate;
        private String ISBN;
        private double Price;

        public Book(String title, String author, String publisher, Calendar releaseDate, String isbn, double price) {
            Title = title;
            Author = author;
            Publisher = publisher;
            ReleaseDate = releaseDate;
            ISBN = isbn;
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

        public Calendar getReleaseDate() {
            return ReleaseDate;
        }

        public void setReleaseDate(Calendar releaseDate) {
            ReleaseDate = releaseDate;
        }

        public String getISBN() {
            return ISBN;
        }

        public void setISBN(String ISBN) {
            this.ISBN = ISBN;
        }

        public double getPrice() {
            return Price;
        }

        public void setPrice(double price) {
            Price = price;
        }
    }
}













/**
 * package ClassesAndObjects;

 import java.text.DateFormat;
 import java.text.SimpleDateFormat;
 import java.util.*;
 import java.util.stream.Collectors;

 public class BookLibraryModification {
 public static void main(String[] args) {
 Scanner sc = new Scanner(System.in);

 List<BookV> books = new ArrayList<>();

 int n = Integer.parseInt(sc.nextLine());

 for (int i = 0; i < n; i++) {
 String[] line = sc.nextLine().split("\\s");
 String title = line[0];
 String author = line[1];
 String publisher = line[2];
 int[] d = Arrays.stream(line[3].split("\\.")).mapToInt(Integer::parseInt).toArray();
 Calendar date = GregorianCalendar.getInstance();
 date.set(d[2], d[1] - 1, d[0]);
 String id = line[4];
 double price = Double.parseDouble(line[5]);

 BookV book = new BookV(title, author, publisher, date, id, price);

 books.add(book);
 }
 int[] controlDate = Arrays.stream(sc.nextLine().split("\\.")).mapToInt(Integer::parseInt).toArray();
 Calendar control = GregorianCalendar.getInstance();
 control.set(controlDate[2], controlDate[1] - 1, controlDate[0]);

 List<BookV> asd = books.stream().filter(a -> a.getDate().compareTo(control) > 0).sorted((a, b) -> {
 if(a.getDate().compareTo(b.getDate()) == 0){
 return a.getTitle().compareTo(b.getTitle());
 }
 return a.getDate().compareTo(b.getDate());
 }).collect(Collectors.toList());

 DateFormat dateFormat = new SimpleDateFormat("dd.MM.yyyy");
 for (BookV book : asd) {
 String formattedDate = dateFormat.format(book.getDate().getTime());
 System.out.printf("%s -> %s%n", book.getTitle(), formattedDate);
 }

 }
 }
 class BookV{
 private String title;
 private String author;
 private String publisher;
 private Calendar date;
 private String id;
 private double price;

 public BookV(String title, String author, String publisher, Calendar date, String id, double price) {
 this.title = title;
 this.author = author;
 this.publisher = publisher;
 this.date = date;
 this.id = id;
 this.price = price;
 }

 public String getTitle() {

 return title;
 }

 public void setTitle(String title) {
 this.title = title;
 }

 public String getAuthor() {
 return author;
 }

 public void setAuthor(String author) {
 this.author = author;
 }

 public String getPublisher() {
 return publisher;
 }

 public void setPublisher(String publisher) {
 this.publisher = publisher;
 }

 public Calendar getDate() {
 return date;
 }

 public void setDate(Calendar date) {
 this.date = date;
 }

 public String getId() {
 return id;
 }

 public void setId(String id) {
 this.id = id;
 }

 public double getPrice() {
 return price;
 }

 public void setPrice(double price) {
 this.price = price;
 }
 }
 **/