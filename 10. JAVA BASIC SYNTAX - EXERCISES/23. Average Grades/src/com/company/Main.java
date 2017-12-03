package com.company;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.Scanner;

class Student {
    private String Name;
    private ArrayList<Double> Grades;
    private Double Average;

    public Student(String name, ArrayList<Double> grades, Double average) {
        Name = name;
        Grades = grades;
        Average = average;
    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }

    public ArrayList<Double> getGrades() {
        return Grades;
    }

    public void setGrades(ArrayList<Double> grades) {
        Grades = grades;
    }

    public Double getAverage() {
        return Average;
    }

    public void setAverage(Double average) {
        Average = average;
    }
}

public class Main {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        ArrayList<Student> record = new ArrayList<>();

        int n = Integer.parseInt(scanner.nextLine());

        for (int i = 0; i < n; i++) {
            String[] arr = scanner.nextLine().split(" ");

            String name = arr[0];

            ArrayList<Double> grades = new ArrayList<>();
            FillGrades(grades, arr);

            double average = 0.0;
            for (Double grade : grades) {
                average+=grade;
            }
            average/=grades.size();

            Student currentStudent = new Student(name, grades, average);

            record.add(currentStudent);

        }

        Collections.sort(record, StuNameComparator);

        for (Student student : record) {
            double average = student.getAverage();
            if (average >= 5.00) {
                System.out.printf("%s -> %1.2f\n", student.getName(), average);
            }
        }

    }

    private static void FillGrades(ArrayList<Double> grades, String[] arr) {
        for (int j = 1; j < arr.length; j++) {
            grades.add(Double.parseDouble(arr[j]));
        }
    }

    public static Comparator<Student> StuNameComparator = new Comparator<Student>() {

        public int compare(Student firstStudent, Student secondStudent) {
            String name1 = firstStudent.getName();
            String name2 = secondStudent.getName();

            if (name1.equals(name2)) {
                double average1 = firstStudent.getAverage();
                double average2 = secondStudent.getAverage();

                // Descending order (for Ascending - swap the return ones)
                if (average1 < average2) return 1;
                if (average1 > average2) return -1;
                return 0;
            }

            // Ascending order (for Descending - return name2.compareTo(name1);)
            return name1.compareTo(name2);
        }
    };
}
