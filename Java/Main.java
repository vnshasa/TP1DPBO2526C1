import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    private static boolean isIdExist(ArrayList<Film> daftar, String id) {
        for (Film f : daftar) {
            if (f.getId().equals(id)) return true;
        }
        return false;
    }

    public static void main(String[] args) {
        ArrayList<Film> daftarFilm = new ArrayList<>();
        Scanner scanner = new Scanner(System.in);
        String pilihan;

        do {
            System.out.println("\n=== MENU BIOSKOP ===");
            System.out.println("1. Tambah Data\n2. Tampilkan Data\n3. Update Data\n4. Hapus Data\n5. Cari Data\n6. Keluar");
            System.out.print("Pilih menu: ");
            pilihan = scanner.nextLine();

            switch (pilihan) {
                case "1":
                    System.out.print("ID: "); String id = scanner.nextLine();
                    if (isIdExist(daftarFilm, id)) {
                        System.out.println("[Error] ID sudah digunakan! Silakan gunakan ID lain.");
                        break;
                    }
                    System.out.print("Judul: "); String judul = scanner.nextLine();
                    System.out.print("Genre: "); String genre = scanner.nextLine();
                    System.out.print("Durasi (menit): "); String durasiStr = scanner.nextLine();
                    
                    try {
                        int durasi = Integer.parseInt(durasiStr);
                        if (durasi < 0) throw new Exception("Negatif");
                        System.out.print("Path Gambar: "); String gambar = scanner.nextLine();
                        daftarFilm.add(new Film(id, judul, genre, durasi, gambar));
                        System.out.println("Data berhasil ditambahkan!");
                    } catch (Exception e) {
                        System.out.println("[Error] Durasi harus berupa angka dan tidak boleh negatif!");
                    }
                    break;
                case "2":
                    if (daftarFilm.isEmpty()) System.out.println("Data film kosong!");
                    for (Film f : daftarFilm) {
                        System.out.println("ID          : " + f.getId());
                        System.out.println("Judul       : " + f.getJudul());
                        System.out.println("Genre       : " + f.getGenre());
                        System.out.println("Durasi      : " + f.getDurasi() + " mnt");
                        System.out.println("Path Gambar : " + f.getGambar());
                        System.out.println("-----------------------------------");
                    }
                    break;
                case "3":
                    System.out.print("Masukkan ID yang diupdate: ");
                    String idUpdate = scanner.nextLine();
                    boolean foundUpdate = false;
                    for (int i = 0; i < daftarFilm.size(); i++) {
                        Film f = daftarFilm.get(i);
                        if (f.getId().equals(idUpdate)) {
                            System.out.print("ID Baru (Enter untuk skip): "); String idBaru = scanner.nextLine();
                            if (!idBaru.isEmpty() && !idBaru.equals(idUpdate)) {
                                if (isIdExist(daftarFilm, idBaru)) {
                                    System.out.println("[Error] ID sudah digunakan!");
                                    foundUpdate = true; break;
                                }
                                // Workaround untuk mengubah ID tanpa membuat method setId (karena di soal ga diminta setId khusus)
                                // Kita buat objek baru dan timpa index tersebut
                                f = new Film(idBaru, f.getJudul(), f.getGenre(), f.getDurasi(), f.getGambar());
                                daftarFilm.set(i, f);
                            }

                            System.out.print("Judul Baru (Enter untuk skip): "); String jd = scanner.nextLine();
                            if (!jd.isEmpty()) f.setJudul(jd);

                            System.out.print("Genre Baru (Enter untuk skip): "); String gn = scanner.nextLine();
                            if (!gn.isEmpty()) f.setGenre(gn);

                            System.out.print("Durasi Baru (Enter untuk skip): "); String dr = scanner.nextLine();
                            if (!dr.isEmpty()) {
                                try {
                                    int d = Integer.parseInt(dr);
                                    if (d < 0) throw new Exception();
                                    f.setDurasi(d);
                                } catch (Exception e) {
                                    System.out.println("[Error] Durasi tidak valid! Durasi lama tetap digunakan.");
                                }
                            }

                            System.out.print("Path Gambar Baru (Enter untuk skip): "); String gb = scanner.nextLine();
                            if (!gb.isEmpty()) f.setGambar(gb);

                            System.out.println("Data berhasil diupdate!");
                            foundUpdate = true;
                            break;
                        }
                    }
                    if (!foundUpdate) System.out.println("ID tidak ditemukan!");
                    break;
                case "4":
                    System.out.print("Masukkan ID yang dihapus: ");
                    String idHapus = scanner.nextLine();
                    boolean removed = daftarFilm.removeIf(f -> f.getId().equals(idHapus));
                    if (removed) System.out.println("Data berhasil dihapus!");
                    else System.out.println("ID tidak ditemukan!");
                    break;
                case "5":
                    System.out.print("Masukkan ID yang dicari: ");
                    String idCari = scanner.nextLine();
                    boolean foundCari = false;
                    for (Film f : daftarFilm) {
                        if (f.getId().equals(idCari)) {
                            System.out.println("\n--- DATA DITEMUKAN ---");
                            System.out.println("ID          : " + f.getId());
                            System.out.println("Judul       : " + f.getJudul());
                            System.out.println("Genre       : " + f.getGenre());
                            System.out.println("Durasi      : " + f.getDurasi() + " mnt");
                            System.out.println("Path Gambar : " + f.getGambar());
                            foundCari = true;
                            break;
                        }
                    }
                    if (!foundCari) System.out.println("ID tidak ditemukan!");
                    break;
            }
        } while (!pilihan.equals("6"));
        scanner.close();
    }
}