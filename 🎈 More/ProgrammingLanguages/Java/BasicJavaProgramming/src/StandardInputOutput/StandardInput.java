package StandardInputOutput;

import java.util.Scanner;

public class StandardInput {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int integerInput = scanner.nextInt();
        System.out.println(integerInput);
        scanner.close();
    }
}
