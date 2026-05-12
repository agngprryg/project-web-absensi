<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MManager extends CI_Model
{
    public function get_all($table)
    {
        return $this->db->get($table)->result();
    }

    public function get_status_active($table)
    {
        return $this->db->where('status', 'aktif')->get($table)->result();
    }

    public function get_by_id($table, $id)
    {
        return $this->db->get_where($table, ['id' => $id])->row();
    }

    public function store($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function update($table, $data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }

    public function delete($table, $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

    public function count_all($table)
    {
        return $this->db->count_all($table);
    }

    public function get_data_gaji_with_karyawan()
    {
        $this->db->select('
        data_gaji.*, 
        data_gaji.id as id_gaji, 
        data_karyawan.*,
        data_karyawan.nama as nama_karyawan,
        ');
        $this->db->from('data_gaji');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_gaji.id_karyawan');
        return $this->db->get()->result();
    }

    public function get_data_cuti_with_karyawan()
    {
        $this->db->select('
        data_cuti.*, 
        data_cuti.id as id_cuti, 
        data_karyawan.*,
        data_karyawan.nama as nama_karyawan,
        ');
        $this->db->from('data_cuti');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_cuti.id_karyawan');
        return $this->db->get()->result();
    }

    public function get_data_kinerja_with_karyawan()
    {
        $this->db->select('
        data_kinerja.*,
        data_kinerja.id as id_kinerja, 
        data_karyawan.*,
        data_karyawan.nama as nama_karyawan,
        ');
        $this->db->from('data_kinerja');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_kinerja.id_karyawan');
        return $this->db->get()->result();
    }

    public function get_data_kinerja_with_karyawan_by_id($id)
    {
        $this->db->select('
        data_kinerja.*,
        data_kinerja.id as id_kinerja, 
        data_karyawan.*,
        data_karyawan.id as id_karyawan,
        data_karyawan.nama as nama_karyawan,
        ');
        $this->db->from('data_kinerja');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_kinerja.id_karyawan');
        $this->db->where('data_kinerja.id', $id);
        return $this->db->get()->row();
    }

    public function get_data_cuti_with_karyawan_by_id($id)
    {
        $this->db->select('
        data_cuti.*,
        data_cuti.id as id_cuti,
        data_karyawan.*,
        data_karyawan.id as id_karyawan,
        data_karyawan.nama as nama_karyawan,
        ');
        $this->db->from('data_cuti');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_cuti.id_karyawan');
        $this->db->where('data_cuti.id', $id);
        return $this->db->get()->row();
    }

    public function get_kehadiran_harian($tanggal = null)
    {
        if ($tanggal === null) {
            $tanggal = date('Y-m-d');
        }

        $this->db->select('
        data_karyawan.nama, 
        data_karyawan.foto, 
        data_karyawan.jabatan, 
        data_kehadiran.*
        ');
        $this->db->from('data_kehadiran');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_kehadiran.id_karyawan');
        $this->db->where('data_kehadiran.tanggal', $tanggal);
        return $this->db->get()->result();
    }

    public function get_kehadiran_mingguan()
    {
        $start = date('Y-m-d', strtotime('monday this week'));
        $end   = date('Y-m-d', strtotime('saturday this week'));

        $this->db->select('
        data_karyawan.id AS id_karyawan,
        data_karyawan.nama,
        data_karyawan.foto,
        data_karyawan.jabatan,
        data_kehadiran.tanggal,
        data_kehadiran.status
    ');
        $this->db->from('data_kehadiran');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_kehadiran.id_karyawan');
        $this->db->where("data_kehadiran.tanggal BETWEEN '$start' AND '$end'");
        $query = $this->db->get()->result();

        $data = [];
        $hariList = [
            'Monday'        => 'senin',
            'Tuesday'       => 'selasa',
            'Wednesday'     => 'rabu',
            'Thursday'      => 'kamis',
            'Friday'        => 'jumat',
            'Saturday'      => 'sabtu',
            'Sunday'        => 'minggu'
        ];

        foreach ($query as $row) {
            $hari = $hariList[date('l', strtotime($row->tanggal))];

            if (!isset($data[$row->id_karyawan])) {
                $data[$row->id_karyawan] = [
                    'id_karyawan' => $row->id_karyawan,
                    'nama' => $row->nama,
                    'foto' => $row->foto,
                    'jabatan' => $row->jabatan,
                    'senin' => '-',
                    'selasa' => '-',
                    'rabu' => '-',
                    'kamis' => '-',
                    'jumat' => '-',
                    'sabtu' => '-',
                    'minggu' => '-',
                ];
            }

            $data[$row->id_karyawan][$hari] = $row->status;
        }

        // Ubah setiap elemen menjadi object agar bisa pakai -> di view
        return array_map(function ($item) {
            return (object) $item;
        }, array_values($data));
    }

    public function get_kehadiran_bulanan($bulan = null)
    {
        if ($bulan === null) {
            $bulan = date('Y-m');
        }

        $this->db->select('
        data_karyawan.nama, 
        data_karyawan.foto, 
        data_karyawan.jabatan, 
        data_kehadiran.status,
        data_kehadiran.id_karyawan
    ');
        $this->db->from('data_kehadiran');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_kehadiran.id_karyawan');
        $this->db->like('data_kehadiran.tanggal', $bulan, 'after');
        $result = $this->db->get()->result();

        // Hitung jumlah status per karyawan
        $rekap = [];
        foreach ($result as $row) {
            $id = $row->id_karyawan;
            if (!isset($rekap[$id])) {
                $rekap[$id] = [
                    'id_karyawan' => $id,
                    'nama' => $row->nama,
                    'foto' => $row->foto,
                    'jabatan' => $row->jabatan,
                    'hadir' => 0,
                    'izin' => 0,
                    'sakit' => 0,
                    'cuti' => 0,
                    'alpha' => 0,
                    'libur' => 0,
                ];
            }

            // Pastikan status valid
            if (isset($rekap[$id][$row->status])) {
                $rekap[$id][$row->status]++;
            }
        }

        // Konversi hasil ke object agar bisa pakai ->
        return array_map(function ($item) {
            return (object) $item;
        }, array_values($rekap));
    }

    public function get_kehadiran_filter($bulan = null, $year = null)
    {
        $this->db->select('
        data_kehadiran.*, 
        data_karyawan.*
        ');
        $this->db->from('data_kehadiran');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_kehadiran.id_karyawan');

        if ($bulan) {
            $this->db->where('MONTH(data_kehadiran.tanggal)', $bulan);
        }

        if ($year) {
            $this->db->where('YEAR(data_kehadiran.tanggal)', $year);
        }

        return $this->db->get()->result();
    }

    public function get_gaji_filter($bulan = null, $year = null)
    {
        $this->db->select('
        data_gaji.*, 
        data_karyawan.*
    ');
        $this->db->from('data_gaji');
        $this->db->join('data_karyawan', 'data_karyawan.id = data_gaji.id_karyawan');

        if ($bulan && $year) {
            $this->db->like('data_gaji.bulan', "$year-$bulan", 'after'); // contoh: '2025-07%'
        } elseif ($year) {
            $this->db->like('data_gaji.bulan', "$year", 'after'); // contoh: '2025%'
        }

        return $this->db->get()->result();
    }

    public function get_lamaran_masuk()
    {
        $this->db->select('
        lamaran.*,
        lamaran.id as id_lamaran,
        lamaran.status as status_lamaran,
        data_pelamar.*, 
        data_lowongan.*, 
        ');
        $this->db->from('lamaran');
        $this->db->join('data_pelamar', 'data_pelamar.id = lamaran.id_pelamar');
        $this->db->join('data_lowongan', 'data_lowongan.id = lamaran.id_lowongan');
        return $this->db->get()->result();
    }

    public function get_lamaran_detail($id_lamaran)
    {
        $this->db->select('
            lamaran.*,
            data_pelamar.*,
            data_lowongan.posisi,
            data_lowongan.departemen,
            data_lowongan.deskripsi,
            data_lowongan.kualifikasi,
            data_lowongan.lokasi_penempatan,
            data_lowongan.status as status_lowongan
        ');
        $this->db->from('lamaran');
        $this->db->join('data_pelamar', 'data_pelamar.id = lamaran.id_pelamar');
        $this->db->join('data_lowongan', 'data_lowongan.id = lamaran.id_lowongan');
        $this->db->where('lamaran.id', $id_lamaran);
        $query = $this->db->get();

        return $query->row();
    }

    // Update status lamaran
    public function update_status_lamaran($id_lamaran, $status, $catatan = null)
    {
        $data = array(
            'status' => $status,
            'catatan' => $catatan,
            'tanggal_update' => date('Y-m-d H:i:s')
        );

        $this->db->where('id', $id_lamaran);
        return $this->db->update('lamaran', $data);
    }

    public function get_total_gaji_dibayar()
    {
        $this->db->select_sum('total_gaji');
        $this->db->where('status', 'dibayar');
        $query = $this->db->get('data_gaji');
        return $query->row()->total_gaji;
    }

    public function get_statistik_kehadiran_bulan_ini()
    {
        $bulan_ini = date('m');
        $tahun_ini = date('Y');

        // Query untuk statistik per hari dalam minggu ini
        $this->db->select('DAYNAME(tanggal) as hari, COUNT(*) as total, status');
        $this->db->where('MONTH(tanggal)', $bulan_ini);
        $this->db->where('YEAR(tanggal)', $tahun_ini);
        $this->db->group_by('DAYNAME(tanggal), status');
        $query = $this->db->get('data_kehadiran');

        $result = array();
        foreach ($query->result() as $row) {
            $result[$row->hari][$row->status] = $row->total;
        }

        // Hitung persentase kehadiran
        $this->db->where('MONTH(tanggal)', $bulan_ini);
        $this->db->where('YEAR(tanggal)', $tahun_ini);
        $total_hadir = $this->db->where('status', 'hadir')->count_all_results('data_kehadiran');

        $this->db->where('MONTH(tanggal)', $bulan_ini);
        $this->db->where('YEAR(tanggal)', $tahun_ini);
        $total_absen = $this->db->where("status != 'hadir'")->count_all_results('data_kehadiran');

        $total = $total_hadir + $total_absen;
        $persentase_hadir = $total > 0 ? round(($total_hadir / $total) * 100) : 0;
        $persentase_absen = $total > 0 ? round(($total_absen / $total) * 100) : 0;

        return array(
            'statistik_harian' => $result,
            'persentase_hadir' => $persentase_hadir,
            'persentase_absen' => $persentase_absen
        );
    }

    public function get_aktivitas_terkini()
    {
        // Ambil data cuti/pengajuan terbaru
        $this->db->select('dk.*, dk.nama as nama_karyawan, dk.foto');
        $this->db->from('data_karyawan dk');
        $this->db->join('data_kehadiran kh', 'kh.id_karyawan = dk.id', 'left');
        $this->db->where('kh.tanggal >=', date('Y-m-d', strtotime('-7 days')));
        $this->db->where("kh.status != 'hadir' OR kh.jam_masuk > '08:30:00'");
        $this->db->order_by('kh.tanggal', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();

        $aktivitas = array();
        foreach ($query->result() as $row) {
            $aktivitas[] = array(
                'id' => $row->id,
                'nama' => $row->nama_karyawan,
                'foto' => $row->foto,
                'aktivitas' => $this->format_aktivitas($row),
                'waktu' => $this->format_waktu($row->tanggal)
            );
        }

        return $aktivitas;
    }

    private function format_aktivitas($data)
    {
        if ($data->status == 'izin') {
            return "Mengajukan izin tanggal " . date('d M', strtotime($data->tanggal));
        } elseif ($data->status == 'cuti') {
            return "Mengajukan cuti tanggal " . date('d M', strtotime($data->tanggal));
        } elseif ($data->status == 'sakit') {
            return "Melaporkan sakit tanggal " . date('d M', strtotime($data->tanggal));
        } elseif ($data->jam_masuk > '08:30:00') {
            $terlambat = strtotime($data->jam_masuk) - strtotime('08:30:00');
            $menit = floor($terlambat / 60);
            return "Terlambat masuk hari ini (" . $menit . " menit)";
        } else {
            return "Aktivitas terbaru";
        }
    }

    private function format_waktu($tanggal)
    {
        $diff = time() - strtotime($tanggal);

        if ($diff < 60) {
            return "Baru saja";
        } elseif ($diff < 3600) {
            $menit = floor($diff / 60);
            return $menit . " menit yang lalu";
        } elseif ($diff < 86400) {
            $jam = floor($diff / 3600);
            return $jam . " jam yang lalu";
        } else {
            $hari = floor($diff / 86400);
            return $hari . " hari yang lalu";
        }
    }
}
