// ANGGA XPPLG1
using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("[GATRASATYA]");
        Console.Write("Masukkan Berat Badan (Kg): ");
        double beratBadan = double.Parse(Console.ReadLine());

        Console.Write("Masukkan Tinggi Badan (Cm): ");
        double tinggiCm = double.Parse(Console.ReadLine());
        double tinggiMeter = tinggiCm / 100;

        double bbt = beratBadan / (tinggiMeter * tinggiMeter);

        string kategori = "";
        if (bbt < 18.5)
        {
            kategori = "Kurus";
        }
        else if (bbt >= 18.5 && bbt <= 22.9)
        {
            kategori = "Normal";
        }
        else
        {
            kategori = "Obesitas";
        }

        Console.WriteLine("BMI Anda adalah: " + bbt.ToString("F2"));
        Console.WriteLine("Kategori BMI Anda: " + kategori);
    }
}