using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("Program Perhitungan Nilai Rapor Siswa");
        Console.WriteLine("------------------------------------");

        Console.Write("Masukkan Nama Siswa: ");
        string namaSiswa = Console.ReadLine();

        Console.Write("Masukkan Kelas: ");
        string kelas = Console.ReadLine();

        Console.Write("Masukkan Nilai Pengetahuan: ");
        double nilaiPengetahuan = double.Parse(Console.ReadLine());

        Console.Write("Masukkan Nilai Keterampilan: ");
        double nilaiKeterampilan = double.Parse(Console.ReadLine());

        Console.Write("Masukkan Nilai Ulangan Harian: ");
        double nilaiUlanganHarian = double.Parse(Console.ReadLine());

        Console.Write("Masukkan Nilai Ujian Akhir: ");
        double nilaiUjianAkhir = double.Parse(Console.ReadLine());

        double rataRata = (nilaiPengetahuan + nilaiKeterampilan + nilaiUlanganHarian + nilaiUjianAkhir) / 4;

        Console.WriteLine("\nHasil Rapor Siswa");
        Console.WriteLine("-----------------");
        Console.WriteLine("Nama Siswa: " + namaSiswa);
        Console.WriteLine("Kelas: " + kelas);
        Console.WriteLine("Nilai Pengetahuan: " + nilaiPengetahuan);
        Console.WriteLine("Nilai Keterampilan: " + nilaiKeterampilan);
        Console.WriteLine("Nilai Ulangan Harian: " + nilaiUlanganHarian);
        Console.WriteLine("Nilai Ujian Akhir: " + nilaiUjianAkhir);
        Console.WriteLine("Rata-rata Nilai: " + rataRata);

        string predikat;
        if (rataRata >= 90)
        {
            predikat = "A";
        }
        else if (rataRata >= 80)
        {
            predikat = "B";
        }
        else if (rataRata >= 70)
        {
            predikat = "C";
        }
        else if (rataRata >= 60)
        {
            predikat = "D";
        }
        else
        {
            predikat = "F";
        }

        Console.WriteLine("Predikat: " + predikat);
    }
}
