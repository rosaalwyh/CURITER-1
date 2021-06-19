<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_rating extends CI_Model
{
    function getRS()
    {
        $this->db->order_by('id_rs', 'DESC');
        return $this->db->get('rumahsakit');
    }
    function getRsRating($id_rs)
    {
        $this->db->select('AVG(rating) as rating');
        $this->db->from('rating');
        $this->db->where('id_rs', $id_rs);
        $data = $this->db->get();
        foreach ($data->result_array() as $row) {
            return $row["rating"];
        }
    }

    function html_output()
    {
        $data = $this->getRS();
        $output = '';
        foreach ($data->result_array() as $row) {
            $color = '';
            $rating = $this->getRsRating($row["id_rs"]);
            $output .=  '
                        <td class="list-inline" data-rating="' . $rating . '" title="Average Rating - ' . $rating . '">
                        ';
            for ($count = 1; $count <= 5; $count++) {
                if ($count <= $rating) {
                    $color = 'color:#ffcc00;';
                } else {
                    $color = 'color:#ccc;';
                }

                $output .= '<td title="' . $count . '" id_rs="' . $row['id_rs'] . '-' . $count . '" data-index="' . $count . '" data-id_rs="' . $row["id_rs"] . '" data-rating="' . $rating . '" class="rating" style="cursor:pointer; ' . $color . ' font-size:24px;">&#9733;</td>';
            }
            $output .= '</td>';
        }
        echo $output;
    }

    function insert_rating($data)
    {
        $this->db->insert('rating', $data);
    }
}
