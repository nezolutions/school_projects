using System;

class Program
{
    static void Main()
    {
        int choice;

        do
        {
            Console.WriteLine("Pilih bentuk yang ingin dihitung:");
            Console.WriteLine("1. Trapesium");
            Console.WriteLine("2. Jajar Genjang");
            Console.WriteLine("3. Lingkaran");
            Console.WriteLine("4. Keluar");
            Console.Write("Masukkan pilihan (1-4): ");

            if (int.TryParse(Console.ReadLine(), out choice))
            {
                switch (choice)
                {
                    case 1:
                        CalculateTrapezium();
                        break;
                    case 2:
                        CalculateParallelogram();
                        break;
                    case 3:
                        CalculateCircle();
                        break;
                    case 4:
                        Console.WriteLine("Terima kasih. Program selesai.");
                        break;
                    default:
                        Console.WriteLine("Pilihan tidak valid. Silakan pilih lagi.");
                        break;
                }
            }
            else
            {
                Console.WriteLine("Pilihan tidak valid. Silakan pilih lagi.");
            }

        } while (choice != 4);
    }

    static void CalculateTrapezium()
    {
        Console.Write("Masukkan panjang sisi atas: ");
        double topSide = double.Parse(Console.ReadLine());

        Console.Write("Masukkan panjang sisi bawah: ");
        double bottomSide = double.Parse(Console.ReadLine());

        Console.Write("Masukkan tinggi trapesium: ");
        double height = double.Parse(Console.ReadLine());

        Console.Write("Masukkan panjang sisi kiri: ");
        double leftSide = double.Parse(Console.ReadLine());

        Console.Write("Masukkan panjang sisi kanan: ");
        double rightSide = double.Parse(Console.ReadLine());

        double area = 0.5 * (topSide + bottomSide) * height;
        double perimeter = topSide + bottomSide + leftSide + rightSide;

        Console.WriteLine($"Luas trapesium: {area}");
        Console.WriteLine($"Keliling trapesium: {perimeter}");
    }

    static void CalculateParallelogram()
    {
        Console.Write("Masukkan panjang alas jajar genjang: ");
        double baseLength = double.Parse(Console.ReadLine());

        Console.Write("Masukkan tinggi jajar genjang: ");
        double height = double.Parse(Console.ReadLine());

        Console.Write("Masukkan panjang sisi: ");
        double sideLength = double.Parse(Console.ReadLine());

        double area = baseLength * height;
        double perimeter = 2 * (baseLength + sideLength);

        Console.WriteLine($"Luas jajar genjang: {area}");
        Console.WriteLine($"Keliling jajar genjang: {perimeter}");
    }

    static void CalculateCircle()
    {
        Console.Write("Masukkan jari-jari lingkaran: ");
        double radius = double.Parse(Console.ReadLine());

        double area = Math.PI * radius * radius;
        double circumference = 2 * Math.PI * radius;

        Console.WriteLine($"Luas lingkaran: {area}");
        Console.WriteLine($"Keliling lingkaran: {circumference}");
    }
}
