# CRUD_LARAVEL9


## Fitur dan Tampilan WEB
### Halaman Utama
<img width="960" alt="Screenshot_1" src="https://user-images.githubusercontent.com/95411404/178097511-6fb90568-10c8-46f4-a843-8f1b12dc41cd.png"></img>

### Tambah
<img width="960" alt="Screenshot_3" src="https://user-images.githubusercontent.com/95411404/178098207-f09b4510-9c85-4912-805b-979661870cd8.png">
<img width="960" alt="Screenshot_4" src="https://user-images.githubusercontent.com/95411404/178098286-368f57d6-3027-4717-88bc-0052bed08410.png">

### Edit
<img width="960" alt="Screenshot_5" src="https://user-images.githubusercontent.com/95411404/178098335-40720209-e074-42bf-b831-e2ea563a8bae.png">

### Hapus
<img width="960" alt="Screenshot_6" src="https://user-images.githubusercontent.com/95411404/178098365-d46fc2f3-3186-4b97-b3d7-7549da695664.png">

### Export PDF
<img width="960" alt="Screenshot_7" src="https://user-images.githubusercontent.com/95411404/178098418-0e89e234-fcb7-4f4d-ae46-33941c5ef772.png">


## Installation

1. Clone the github repo:

    ```bash
    git clone https://github.com/Aditypraa/Crud-Laravel9.git
    ```
2. Go the project directory:

    ```bash
    cd Crud_Laravel9
    ```
3. Install the project dependencies:
    ```bash
    composer install or composer update
    ```
4. Copy the .env.example to .env or simly rename it:
   </br>If linux:
   ```bash
   cp .env.example .env
   ```
   If Windows:
    ```bash
    copy .env.example .env
    ```
5. Run XAMPP and create an empty Database named wtb_travel
   </br>Create tables into database using Laravel migration and seeder:
    ```bash
    php artisan migrate:fresh --seed
    ```
6. Create the application key:
    ```bash
    php artisan key:generate
    ```
7. To create the symbolic link:
    ```bash
    php artisan storage:link
    ```
8. Start the laravel server:
    ```bash
    php artisan serve
    ```
