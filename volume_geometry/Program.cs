// ANGGA XPPLG1
using System;

public class Program
{
    public static void Main()
    {
        Console.WriteLine("[GATRASATYA]");
        Console.Write("Pilih Benda yang Ingin Volumenya di Hitung:\n 1. Kubus\n 2. Balok\n 3. Tabung\n<Ketik 1 / 2 / 3>: ");
        string volume = Console.ReadLine();
        
        if (volume.ToLower() == "1") {
            Console.WriteLine("---------------");
            Console.Write("Anda Memilih Kubus.\nMasukkan Sisi Kubus: ");
            double skubus = Convert.ToDouble(Console.ReadLine());
            
            double vkubus = skubus * skubus * skubus;
            Console.WriteLine("---------------");
            Console.WriteLine("Volume Kubus: " + vkubus + "\nProgram Selesai.\n\"Run\" Untuk Menjalankan Program Kembali.");
        }
        else if (volume.ToLower() == "2") {
            Console.WriteLine("---------------");
            Console.Write("Masukkan Panjang: ");
            double pbalok = Convert.ToDouble(Console.ReadLine());
            Console.Write("Masukkan Lebar: ");
            double lbalok = Convert.ToDouble(Console.ReadLine());
            Console.Write("Masukkan Tinggi: ");
            double tbalok = Convert.ToDouble(Console.ReadLine());
            
            double vbalok = pbalok * lbalok * tbalok;
            Console.WriteLine("---------------");
            Console.WriteLine("Volume Balok: " + vbalok + "\nProgram Selesai.\n\"Run\" Untuk Menjalankan Program Kembali.");
        }
        else if (volume.ToLower() == "3") {
            Console.WriteLine("---------------");
            Console.Write("Masukkan Jari-Jari: ");
            double rtabung = Convert.ToDouble(Console.ReadLine());
            Console.Write("Masukkan Tinggi: ");
            double ttabung = Convert.ToDouble(Console.ReadLine());

            double vtabung = Math.PI * Math.Pow(rtabung, 2) * ttabung;
            Console.WriteLine("---------------");
            Console.WriteLine("Volume Tabung: " + vtabung + "\nProgram Selesai.\n\"Run\" Untuk Menjalankan Program Kembali.");
        }
        else {
            Console.WriteLine("---------------");
            Console.WriteLine("Input Tidak Valid, Program Berakhir.\n\"Run\" Untuk Menjalankan Program Kembali.\nNote: Jika Ini Sebuat Kesalahan, Jalankan Ulang Programnya.");
        }
    }
}