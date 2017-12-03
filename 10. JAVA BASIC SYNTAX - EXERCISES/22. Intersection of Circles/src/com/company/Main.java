package com.company;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

class Circle {
    private Double X;
    private Double Y;
    private Double Radius;

    Double getX() {
        return X;
    }

    void setX(Double x) {
        X = x;
    }

    Double getY() {
        return Y;
    }

    void setY(Double y) {
        Y = y;
    }

    Double getRadius() {
        return Radius;
    }

    void setRadius(Double radius) {
        Radius = radius;
    }
}

public class Main {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        ArrayList<Circle> record = new ArrayList<>();


        for (int i = 0; i < 2; i++) {
            int[] input = Arrays
                    .stream(scanner.nextLine().split(" "))
                    .mapToInt(Integer::parseInt)
                    .toArray();

            double X = input[0];
            double Y = input[1];
            double Radius = input[2];

            Circle currentPoint = new Circle();
            currentPoint.setX(X);
            currentPoint.setY(Y);
            currentPoint.setRadius(Radius);

            record.add(currentPoint);
        }

        String output = AreIntersect(record);

        System.out.println(output);
    }

    private static String AreIntersect(ArrayList<Circle> record) {

        double distanceBetweenCenters = Math.sqrt(
                        Math.pow(record.get(0).getX() - record.get(1).getX(), 2) +
                        Math.pow(record.get(0).getY() - record.get(1).getY(), 2)
        );

        if (record.get(0).getRadius() + record.get(1).getRadius() >= distanceBetweenCenters){
            return "Yes";
        }else {
            return "No";
        }
    }
}
