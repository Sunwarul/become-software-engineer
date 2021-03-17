import java.util.Scanner;

/**
 * Standard input output examples
 */
public class StandardInputOutput {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Enter name: ");
        String name = scanner.nextLine();

        System.out.println("Enter age: ");
        int age = scanner.nextInt();

        System.out.println("Name = " + name + "\nAge = " + age);

        scanner.close();
    }
}
