// ANGGA XPPLG1
using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("[GATRASATYA]");
        Console.Write("Masukkan tahun lahir: ");
        int tahunLahir = int.Parse(Console.ReadLine());
        int bulanLahir;

        do {
            Console.Write("Masukkan bulan lahir (1-12): ");
            bulanLahir = int.Parse(Console.ReadLine());
        } while (bulanLahir < 1 || bulanLahir > 12);
        
        // Mendapatkan tanggal saat ini
        DateTime tanggalSekarang = DateTime.Now;

        // Mendapatkan tahun saat ini
        int tahunSekarang = tanggalSekarang.Year;

        // Mendapatkan bulan saat ini
        int bulanSekarang = tanggalSekarang.Month;

        // Menghitung umur dalam tahun
        int umurTahun = tahunSekarang - tahunLahir;

        // Menghitung umur dalam bulan
        int umurBulan = bulanSekarang - bulanLahir;

        // Menyesuaikan umur jika bulan saat ini kurang dari bulan lahir
        if (umurBulan < 0)
        {
            umurTahun--;
            umurBulan = 12 - Math.Abs(umurBulan);
        }

        Console.WriteLine("Umur Anda adalah: " + umurTahun + " tahun " + umurBulan + " bulan.");
    }
}