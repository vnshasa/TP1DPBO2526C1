#include <iostream>
#include <string>
using namespace std;

class Film {
private:
    string id;
    string judul;
    string genre;
    int durasi;
    string gambar;

public:
    Film() {}
    Film(string id, string judul, string genre, int durasi, string gambar) {
        this->id = id;
        this->judul = judul;
        this->genre = genre;
        this->durasi = durasi;
        this->gambar = gambar;
    }

    string getId() { return id; }
    string getJudul() { return judul; }
    string getGenre() { return genre; }
    int getDurasi() { return durasi; }
    string getGambar() { return gambar; }

    void setJudul(string judul) { this->judul = judul; }
    void setGenre(string genre) { this->genre = genre; }
    void setDurasi(int durasi) { this->durasi = durasi; }
    void setGambar(string gambar) { this->gambar = gambar; }
};