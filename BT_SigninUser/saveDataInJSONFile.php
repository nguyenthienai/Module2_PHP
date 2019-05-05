<?php
function saveDataJSON($filename, $name, $email, $phone)
        {
            try {
                $contact = array(
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone
                );
                // converts json data into array
                $arr_data = loadRegistrations($filename);
                // Push user data to array
                array_push($arr_data, $contact);
                //Convert updated array to JSON
                $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
                //write json data into data.json file
                file_put_contents($filename, $jsondata);
                echo "Lưu dữ liệu thành công!";
            } catch (Exception $e) {
                echo 'Lỗi: ', $e->getMessage(), "\n";
            }
        }
?>