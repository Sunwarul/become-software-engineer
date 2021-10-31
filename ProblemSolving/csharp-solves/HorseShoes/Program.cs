using System;
class Program
{
    public static void Main(string[] args)
    {
        Console.WriteLine("Enter size:");
        int size = 2;
        int.TryParse(Console.ReadLine(), out size);
        int[] arr = new int[size];

        Console.WriteLine("Enter values: ");
        for (int i = 0; i < arr.Count(); i++)
        {
            arr[i] = int.Parse(Console.ReadLine());
        }
        Console.WriteLine("Results: ");
        foreach (var item in arr)
        {
            Console.WriteLine(item * 2);
        }        
    }
}