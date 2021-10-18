using System;
using System.Linq;
public class HorseShoes
{
    public static void Main(string[] args)
    {
        string inputLine = Console.ReadLine();
        int[] horseShoes = inputLine.Split(" ").Select(int.Parse).ToArray();
        int[] uniqueHorseShoes = horseShoes.Distinct().ToArray();

        Console.WriteLine(horseShoes.Length - uniqueHorseShoes.Length);
    }
}
