public class Film {
    private String id;
    private String judul;
    private String genre;
    private int durasi;
    private String gambar;

    public Film() {}
    public Film(String id, String judul, String genre, int durasi, String gambar) {
        this.id = id;
        this.judul = judul;
        this.genre = genre;
        this.durasi = durasi;
        this.gambar = gambar;
    }

    public String getId() { return id; }
    public String getJudul() { return judul; }
    public String getGenre() { return genre; }
    public int getDurasi() { return durasi; }
    public String getGambar() { return gambar; }

    public void setJudul(String judul) { this.judul = judul; }
    public void setGenre(String genre) { this.genre = genre; }
    public void setDurasi(int durasi) { this.durasi = durasi; }
    public void setGambar(String gambar) { this.gambar = gambar; }
}