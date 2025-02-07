using System;

namespace gatratm61 {
	class Program {
		static void Main() {
			Console.WriteLine("[Program Menghitung Bangun Datar by GATRA XPPLG1 | ! NOT A COPY-PASTE FROM ChatGTPT !]");
			Console.Write(" 1. MULAI\n 2. INFO\n 0. CLOSE\n> ");
			int xstart = Convert.ToInt32(Console.ReadLine());

			if (xstart == 1) {
				Console.WriteLine("\nLoading...");
				Play();
			} else if (xstart == 2) {
				Console.WriteLine("\nLoading...");
				Info();
			} else if (xstart == 0) {
				Close();
			} else {
				Console.WriteLine("\nInvalid Input.\n");
				Main();
			}
		}

		// MENU
		static void Play() {
			Console.Write("\nPilih Bangun Datar:\n 1. PERSEGI\n 2. PERSEGI PANJANG\n 3. SEGITIGA\n 4. LINGKARAN\n 5. JAJAR GENJANG\n 0. MAIN MENU\n> ");
			int xchoice = Convert.ToInt32(Console.ReadLine());

			switch (xchoice) {
				case 1:
					Console.WriteLine("\nLoading...\n");
					Persegi();
					break;
				case 2:
					Console.WriteLine("\nLoading...\n");
					PersegiPanjang();
					break;
				case 3:
					Console.WriteLine("\nLoading...\n");
					Segitiga();
					break;
				case 4:
					Console.WriteLine("\nLoading...\n");
					Lingkaran();
					break;
				case 5:
					Console.WriteLine("\nLoading...\n");
					JajarGenjang();
					break;
				case 0:
					Main();
					break;
				default:
					Console.WriteLine("\nInvalid Input.\n");
					Play();
					break;
			}
		}

		static void Info() {
			Console.WriteLine("\nINFORMASI LENGKAP DEVELOPER\nNama Lengkap: Anggatra Satya Putra Nugroho;\nKelas: X PPLG I;\nAngkatan: 12;\nTanggal Lahir: 15/5/2008;\nCita-cita: Membahagiakan Ortu;");
            Console.WriteLine("\nINFORMASI LENGKAP PROGRAM\nNama Program: Halaman Login;\nBahasa Pemrograman: C# (CSharp);\nWaktu Pengerjaan: 1 Hari;\nWaktu Rilis: 31/10/2023\n");

            Console.WriteLine("Tekan Tombol apa saja untuk Kembali.\n");
            Console.ReadKey();
            Main();
		}

		static void Close() {
			Console.Write("\nDo you want to close this program?\n 1. YES\n 0. NO\n> ");
			int x = Convert.ToInt32(Console.ReadLine());

			if (x == 1) {
				Console.WriteLine("\nClosing...");

			} else if (x == 0) {
				Main();
			} else {
				Console.WriteLine("\nInvalid Input.\n");
				Close();
			}
		}

		// CONTENT
		static void Persegi() {
			Console.Write("Masukkan Sisi: ");
			double x_sisiPersegi = Convert.ToDouble(Console.ReadLine());

			double xlPersegi = x_sisiPersegi * x_sisiPersegi;
			double xkPersegi = 4 * x_sisiPersegi;

			Console.WriteLine("\nProcessing...\n");
			Console.WriteLine("Luas Persegi: " + xlPersegi);
			Console.WriteLine("Keliling Persegi: +" + xkPersegi);

			Console.WriteLine("\nTekan Tombol apa saja untuk Kembali.\n");
			Console.ReadKey();
			Play();
		}

		static void PersegiPanjang() {
			Console.Write("Masukkan Sisi Panjang: ");
			double xp_PersegiPanjang = Convert.ToDouble(Console.ReadLine());

			Console.Write("Masukkan Sisi Lebar: ");
			double xl_PersegiPanjang = Convert.ToDouble(Console.ReadLine());

			double xlPersegiPanjang = xp_PersegiPanjang * xl_PersegiPanjang;
			double xkPersegiPanjang = 2 * (xp_PersegiPanjang + xl_PersegiPanjang);

			Console.WriteLine("\nProcessing...\n");
			Console.WriteLine("Luas Persegi: " + xlPersegiPanjang);
			Console.WriteLine("Keliling Persegi: +" + xkPersegiPanjang);

			Console.WriteLine("\nTekan Tombol apa saja untuk Kembali.\n");
			Console.ReadKey();
			Play();
		}

		static void Segitiga() {
			Console.Write("Pilih Opsi Hitung:\n 1. LUAS\n 2.KELILING\n> ");
			int xops = Convert.ToInt32(Console.ReadLine());
			
			if (xops == 1) {
				Console.WriteLine("\nLoading...\n");

				Console.Write("Masukkan Sisi Alas: ");
				double xa_Segitiga = Convert.ToDouble(Console.ReadLine());

				Console.Write("Masukkan Sisi Tinggi: ");
				double xt_Segitiga = Convert.ToDouble(Console.ReadLine());

				double xlSegitiga = xa_Segitiga * xt_Segitiga / 2;
				Console.WriteLine("Luas Segitiga: " + xlSegitiga);

				Console.WriteLine("\nTekan Tombol apa saja untuk Kembali.\n");
				Console.ReadKey();
				Play();
			} else if (xops == 2) {
				Console. WriteLine("\nLoading...\n");

				Console.Write("Masukkan Sisi 1: ");
				double xsisi1_Segitiga = Convert.ToDouble(Console.ReadLine());

				Console.Write("Masukkan Sisi 2: ");
				double xsisi2_Segitiga = Convert.ToDouble(Console.ReadLine());

				Console.Write("Masukkan Sisi 3: ");
				double xsisi3_Segitiga = Convert.ToDouble(Console.ReadLine());

				double xkSegitiga = xsisi1_Segitiga + xsisi2_Segitiga + xsisi3_Segitiga;
				Console.WriteLine("Keliling Segitiga: " + xkSegitiga);

				Console.WriteLine("\nTekan Tombol apa saja untuk Kembali.\n");
				Console.ReadKey();
				Play();
			} else {
				Console.WriteLine("\nInvalid Input.\n");
				Segitiga();
			}
		}

		static void Lingkaran() {
			Console.WriteLine("\nLoading...\n");

			Console.Write("Masukkan Jari-jari: ");
			double xr_Lingkaran = Convert.ToDouble(Console.ReadLine());

			double xlLingkaran = Math.PI * xr_Lingkaran * xr_Lingkaran;
			double xkLingkaran = 2 * Math.PI * xr_Lingkaran;

			Console.WriteLine("Luas Lingkaran: " + xlLingkaran);
			Console.WriteLine("Keliling Lingkaran: " + xkLingkaran);

			Console.WriteLine("\nTekan Tombol apa saja untuk Kembali.\n");
			Console.ReadKey();
			Play();
		}

		static void JajarGenjang() {
			Console.WriteLine("\nLoading...\n");

			Console.Write("Masukkan Sisi Alas: ");
			double xa_JG = Convert.ToDouble(Console.ReadLine());

			Console.Write("Masukkan Sisi Tinggi: ");
			double xt_JG = Convert.ToDouble(Console.ReadLine());

			Console.Write("Masukkan Sisi Miring: ");
			double xm_JG = Convert.ToDouble(Console.ReadLine());

			double xlJG = xa_JG * xt_JG;
			double xkJG = 2 * xa_JG * xm_JG;

			Console.WriteLine("Luas Jajar Genjang: " + xlJG);
			Console.WriteLine("Keliling Jajar Genjang: " + xkJG);

			Console.WriteLine("\nTekan Tombol apa saja untuk Kembali.\n");
			Console.ReadKey();
			Play();
		}
	}
}