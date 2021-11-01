class Program
{
    public static void Main(string[] args)
    {
        var enumerable = Enumerable.Range(1, 11).ToArray();
        Console.WriteLine(enumerable.Length);
    }
}