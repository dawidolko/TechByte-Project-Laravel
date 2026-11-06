<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::truncate();
        Products::insert([
            [
                'ID' => 1,
                'NAME' => 'Set Z1 | Ryzen 7500F, RTX 4060 8GB, 16GB DDR5, 500GB SSD, 650W, Aramis Midi ARGB',
                'PRICE' => 910.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => 1,
                'OLD_PRICE' => 950.0,
                'DESCRIPTION' => '<h3>Ready-Made Gaming PC Set</h3>
                <p>Choosing a ready-made computer set is an ideal solution for those who prefer not to risk selecting components themselves or assembling them into a functioning unit. However, many off-the-shelf products can be traps for inexperienced users, lured by attractive prices but unaware of potential quality issues or outdated components.</p>
                
                <p>As gamers ourselves with over a decade of experience, weve completed hundreds, if not thousands, of set orders. This allows us to expertly select components and configure the system so that the computer delivered to you only requires pressing the POWER button to start enjoying virtual gameplay.</p>
                
                <p>With your purchased set, we perform several activities for you. We install the operating system (unactivated Windows 10), all necessary drivers, and make essential updates, including BIOS updates for enhanced security and performance. Depending on the components chosen, we also perform overclocking to safely boost performance in games and applications.</p>
                
                <p>You can rest assured about transport. The ordered set will be delivered by an insured courier, with the computers interior protected to prevent mechanical damage to the components even in case of accidental drops. These protections must be removed before the first startup.</p>
                
                <p>We provide a Door-to-Door warranty for the purchased set, meaning that in the event of a component failure, well collect the defective part or the entire computer from you and service it according to the manufacturers warranty terms.</p>
                ',
            ],
            [
                'ID' => 2,
                'NAME' => 'Set Z2 | Ryzen 5 5600, RTX 4060 8GB, 16GB DDR4, 1TB SSD, Signum 300 ARGB, 750W',
                'PRICE' => 960.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 990.0,
                'DESCRIPTION' => '<h3>Ready-Made Computer Set: Your Gaming Solution</h3>
                <p>For those lacking expertise or the desire to select and assemble components, a ready-made computer set is the perfect solution. Unfortunately, off-the-shelf products can be a trap for the inexperienced, lured by attractive prices without realizing the potential drawbacks of poor quality or outdated components, hindering future expansion or modernization.</p>
                
                <p>As gamers with over a decade of experience, weve completed countless set orders, enabling us to expertly select components and configure systems. Your delivered computer only requires pressing the POWER button to start enjoying virtual gameplay.</p>
                
                <p>With your purchase, we go the extra mile! We install the operating system (unactivated Windows 10), all drivers, and necessary updates (including BIOS) to enhance security and speed. Depending on your components, we may even perform overclocking—safely boosting performance in games and applications through programmatic modification of processor, RAM, and graphics card parameters.</p>
                
                <p>Transport concerns are unnecessary. Your ordered set will be sent via insured courier, with the computers interior protected to prevent mechanical damage, even in case of drops. These protections must be removed before the first start-up.</p>
                
                <p>We offer a Door-to-Door warranty, ensuring peace of mind. In the event of a component failure, we collect the defective part or the entire computer and service it according to the manufacturers warranty terms.</p>
                ',
            ],
            [
                'ID' => 3,
                'NAME' => 'Set Z3 | Intel I7-14700KF, RTX 4070 Ti SUPER 16GB, 32GB DDR5, 1TB SSD, 750W, ARX 500 ARGB',
                'PRICE' => 1975.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 2225.0,
                'DESCRIPTION' => '<h3>Ready-Made Computer Sets: Your Hassle-Free Solution</h3>
                <p>For those lacking technical expertise or the desire to navigate component selection and assembly, ready-made computer sets offer an ideal solution. However, its crucial to avoid falling into the trap of attractive prices that may disguise poor quality or outdated components, hindering future expansion or modernization.</p>
                
                <p>As avid gamers ourselves, boasting over a decade of experience and having completed hundreds, if not thousands, of set orders, we possess the expertise to meticulously select components and perform full configuration. Our goal is to deliver a computer that only requires pressing the POWER button on the casing, allowing you to dive straight into virtual gameplay.</p>
                
                <p>With your purchased set, we go above and beyond! We not only install the operating system (unactivated Windows 10) but also all necessary drivers and updates, including BIOS updates that enhance security and speed. Depending on your chosen components, we may even perform overclocking, safely boosting performance in games and applications through programmatic modification of processor, RAM, and graphics card parameters.</p>
                
                <p>Transportation worries are a thing of the past. Your ordered set will be securely sent to you by insured courier, with the interior of the computer meticulously protected to prevent mechanical damage, even in the event of mishaps during transit. These protections must be removed before the first start-up.</p>
                
                <p>Rest assured with our Door-to-Door warranty for the purchased set. In the unfortunate event of a component failure, well collect the defective component or the entire computer from you and service it in accordance with the warranty terms of the manufacturer.</p>
            ',
            ],
            [
                'ID' => 4,
                'NAME' => 'Set Z4 | Ryzen 7 5700X, RTX 4060 8GB, 16GB DDR4, 500GB SSD, Aramis ARGB, 550W',
                'PRICE' => 1630.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 1680.0,
                'DESCRIPTION' => '<h3>Why Choose a Ready-Made Computer Set?</h3>
                <p>For those lacking the technical know-how or the desire to navigate the complexities of selecting and assembling components, a ready-made computer set offers an ideal solution. However, its important to beware of the pitfalls associated with ready-made products, which can often entice inexperienced users with attractive prices, only to deliver poor-quality or outdated components, hindering future expansion or modernization.</p>
                <h3>Our Expertise, Your Confidence</h3>
                <p>As avid gamers ourselves with over a decade of experience and countless orders fulfilled, we possess the expertise to meticulously select components and perform full configurations. Our goal is to deliver a computer thats ready to use upon delivery—all you need to do is press the POWER button and dive into your virtual adventures.</p>
                <h3>Comprehensive Service</h3>
                <p>With your purchased set, we go the extra mile. We not only install the operating system (unactivated Windows 10) but also ensure that all drivers and necessary updates, including BIOS updates, are installed to enhance the security and speed of your computer. Depending on your chosen components, we may even perform overclocking, safely boosting performance in games and applications through programmatic modification of processor, RAM, and graphics card parameters.</p>
                <h3>Worry-Free Transport</h3>
                <p>Forget about transportation concerns. Your ordered set will be securely sent to you by insured courier, with meticulous protection ensuring that even if the shipment is dropped, there will be no mechanical damage to the components. Please remember to remove these protections before the first start-up.</p>
                <h3>Peace of Mind Warranty</h3>
                <p>With our Door-to-Door warranty, you can rest assured that in the event of a component failure, well take care of everything. Whether its collecting the defective component or the entire computer from you, well ensure that its serviced in accordance with the warranty terms of the manufacturer, providing you with peace of mind and uninterrupted gaming enjoyment.</p>',
            ],
            [
                'ID' => 5,
                'NAME' => 'Set Z5 | Intel I5-14400F, RX 7800 XT 12GB, 16GB DDR4, 500GB SSD, 650W, MSI 112 ARGB',
                'PRICE' => 261.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 311.0,
                'DESCRIPTION' => '<h3>Why Choose a Ready-Made Computer Set?</h3>
                <p>For individuals lacking technical expertise or the desire to select and assemble components, a ready-made computer set offers an ideal solution. However, ready-made products can often be a double-edged sword, particularly for inexperienced users. They may be lured by attractive prices but unknowingly receive components of poor quality or outdated technology, limiting future expansion or upgrades.</p>
                <h3>Our Expertise, Your Peace of Mind</h3>
                <p>As avid gamers ourselves with over a decade of experience, having fulfilled hundreds, if not thousands, of orders, we are well-equipped to select components and perform full configurations. This ensures that the computer delivered to you requires nothing more than pressing the POWER button to enjoy seamless virtual gameplay.</p>
                <h3>Comprehensive Service</h3>
                <p>With your purchased set, we go above and beyond. We not only install the operating system (unactivated Windows 10) but also ensure that all drivers and necessary updates, including BIOS updates, are installed to enhance the security and speed of your computer. Depending on your chosen components, we may even perform overclocking—safely boosting performance in games and applications by programmatically modifying the parameters of the processor, RAM, and graphics card.</p>
                <h3>Worry-Free Transport</h3>
                <p>Forget about transportation worries. Your ordered set will be securely sent to you by insured courier. The interior of the computer is meticulously protected during transport, ensuring that even if the shipment is dropped, there will be no mechanical damage to the components. Remember to remove these protections before the first start-up.</p>
                <h3>Peace of Mind Warranty</h3>
                <p>With our Door-to-Door warranty, you can rest assured that in the event of a component failure, weve got you covered. Whether its collecting the defective component or the entire computer from you, well service it in accordance with the warranty terms of the manufacturer, ensuring minimal disruption to your gaming experience.</p>',
            ],
            [
                'ID' => 6,
                'NAME' => 'Set Z6 | Intel I5-14600KF, RX 7900 GRE 16GB, 16GB DDR5, 500GB SSD, 700W, ARX 500 ARGB',
                'PRICE' => 732.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 650.0,
                'DESCRIPTION' => '<h3>Why Choose a Ready-Made Computer Set?</h2>
                <p>For individuals lacking technical expertise or the desire to select and assemble components themselves, a ready-made computer set offers an ideal solution. However, its important to be cautious, as ready-made products can sometimes lead to disappointment for inexperienced users. They may be attracted by low prices but unknowingly receive components of poor quality or outdated technology, hindering future expansion or upgrades.</p>
                <h3>Our Experience, Your Confidence</h2>
                <p>As gamers ourselves with over 10 years of experience and having fulfilled hundreds, if not thousands, of orders for sets, we have the expertise to select components and perform full configurations. This ensures that the computer delivered to you only requires pressing the POWER button on the casing to enjoy seamless virtual gameplay.</p>
                <h3>Comprehensive Services Included</h2>
                <p>With your purchased set, we go the extra mile. We not only install the operating system (unactivated Windows 10) but also all necessary drivers and updates, including BIOS updates, to enhance the security and speed of your computer. Depending on the selected components, we may even perform overclocking—safely boosting performance in games and applications by programmatically modifying the parameters of the processor, RAM, and graphics card.</p>
                <h3>Worry-Free Transport</h2>
                <p>Forget about transport concerns. Your ordered set will be securely sent to you by insured courier. The interior of the computer is meticulously protected during transport, ensuring that even if the shipment is dropped, there will be no mechanical damage to the components. Remember to remove these protections before the first start-up.</p>
                <h3>Peace of Mind Warranty</h2>
                <p>With our Door-to-Door warranty, you can rest assured that in the event of a component failure, weve got you covered. Whether its collecting the defective component or the entire computer from you, well service it in accordance with the warranty terms of the manufacturer, ensuring minimal disruption to your gaming experience.</p>',
            ],
            [
                'ID' => 7,
                'NAME' => 'Set Z7 | Ryzen 5 7600, RX 7800 XT 16GB, 16GB DDR5,500GB SSD, 112R ARGB, 700W',
                'PRICE' => 650.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 725.0,
                'DESCRIPTION' => '    <h3>Why Choose a Ready-Made Computer Set?</h3>
                <p>A ready-made computer set offers an ideal solution for individuals who lack the expertise or desire to select and assemble components themselves. However, ready-made products can sometimes lead to disappointment for inexperienced users. They may be enticed by attractive prices but overlook the fact that some components are of poor quality or outdated, limiting future expansion or upgrades.</p>
                <h3>Expertise and Experience</h3>
                <p>As gamers ourselves with over 10 years of experience, we have completed hundreds, if not thousands, of orders for sets. This allows us to properly select components and perform full configurations, ensuring that the computer delivered to you requires only pressing the POWER button on the casing to enjoy seamless virtual gameplay.</p>
                <h3>Comprehensive Services Included</h3>
                <p>With your purchased set, we go above and beyond. We not only install the operating system (unactivated Windows 10) but also all necessary drivers and updates, including BIOS updates, to enhance the security and speed of your computer. Depending on the selected components, we may even perform overclocking—safely boosting performance in games and applications by modifying the parameters of the processor, RAM, and graphics card.</p>
                <h3>Worry-Free Transport</h3>
                <p>Forget transport concerns. Your ordered set will be securely sent to you by insured courier. The interior of the computer is meticulously protected during transport, ensuring that even if the shipment is dropped, there will be no mechanical damage to the components. Remember to remove these protections before the first start-up.</p>
                <h3>Peace of Mind Warranty</h3>
                <p>With our Door-to-Door warranty, you can rest assured that in the event of a component failure, we have you covered. Whether its collecting the defective component or the entire computer from you, well service it in accordance with the warranty terms of the manufacturer, ensuring minimal disruption to your gaming experience.</p>',
            ],
            [
                'ID' => 8,
                'NAME' => 'Set Z8 | Ryzen 7 7800X3D, RX 7900 XTX 24GB, 32GB DDR5, 2TB SSD, Regnum 400 ARGB, 1000W',
                'PRICE' => 420.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 510.0,
                'DESCRIPTION' => '<h3>Why Choose a Ready-Made Computer Set?</h3>
                <p>A ready-made computer set is an ideal solution for individuals who lack the necessary knowledge or expertise to select and assemble components themselves. While the allure of attractive prices may be tempting, ready-made products can often be a trap for inexperienced users. They may unknowingly purchase components of poor quality or outdated technology, hindering future expansion or modernization of their machine.</p>
                <h3>Expertise and Experience</h3>
                <p>As avid gamers ourselves with over a decade of experience, we have completed hundreds, if not thousands, of orders for computer sets. This extensive experience allows us to expertly select components and perform full configurations. When you receive your computer, it will be ready to use with just the press of the POWER button, allowing you to immediately enjoy virtual gameplay.</p>
                <h3>Comprehensive Services Included</h3>
                <p>When you purchase a set from us, we go the extra mile for you. In addition to installing the operating system (unactivated Windows 10), we also install all necessary drivers and perform essential updates, including BIOS updates, to enhance the security and speed of your computer. Depending on the components selected, we may even perform overclocking to safely boost performance in games and applications by modifying processor, RAM, and graphics card parameters.</p>
                <h3>Worry-Free Transport</h3>
                <p>Rest assured, you dont need to worry about transport logistics. Your ordered set will be securely delivered to you by an insured courier. The interior of the computer is carefully protected during transport to prevent mechanical damage to components, even in the event of a drop. Remember to remove these protections before starting up your computer for the first time.</p>
                <h3>Peace of Mind Warranty</h3>
                <p>With our Door-to-Door warranty, you can have peace of mind knowing that in the event of a component failure, we have you covered. Whether its collecting the defective component or the entire computer from you, we will service it in accordance with the warranty terms of the manufacturer, ensuring minimal disruption to your gaming experience.</p>',
            ],
            [
                'ID' => 9,
                'NAME' => 'Set Z9 | G4M3R HERO i7-13700F/32GB/1TB/RTX4060Ti/W11x',
                'PRICE' => 3900.0,
                'QUANTITIES_AVAILABLE' => 10,
                'SALE_ID' => null,
                'OLD_PRICE' => 4200.0,
                'DESCRIPTION' => '<h3>Wybierz Inteligentnie: Opinia Dawida Olko</h3>
                <p>Zastanawiasz się nad zakupem komputera? Nie wiesz, jak G4M3R Hero (2023) sprawdzi się w codziennym użytkowaniu? Przeczytaj opinię Piotra Smoły, redaktora portalu Geex.</p>',
            ],
            [
                'ID' => 10,
                'NAME' => 'Apple MacBook Air M2/16GB/256/Mac OS Midnight',
                'PRICE' => 4900.0,
                'QUANTITIES_AVAILABLE' => 1,
                'SALE_ID' => null,
                'OLD_PRICE' => 5200.0,
                'DESCRIPTION' => '<h3>Apple MacBook Air M2/16GB/256/Mac OS Midnight</h3>
                <p>Discover the epitome of elegance and performance with the Apple MacBook Air M2. Combining cutting-edge technology with sleek design, this laptop redefines portability and productivity.</p>
                <p>Powered by the innovative M2 chip, this MacBook Air delivers lightning-fast performance and remarkable efficiency, ensuring smooth multitasking and seamless user experience. With 16GB of RAM, it effortlessly handles demanding tasks, from creative projects to productivity workflows.</p>
                <p>The spacious 256GB SSD provides ample storage for your files, documents, and multimedia content, while ensuring swift data access and fast boot-up times.</p>
                <p>Featuring macOS Midnight, Apples intuitive and powerful operating system, the MacBook Air offers a seamless and secure computing environment. Enjoy a wide range of built-in apps, robust security features, and seamless integration with other Apple devices.</p>
                <p>Experience stunning visuals and vibrant colors on the high-resolution display, ideal for immersive multimedia consumption, content creation, and professional tasks.</p>
                <p>Whether youre a creative professional, a student, or a business user, the Apple MacBook Air M2/16GB/256/Mac OS Midnight is the perfect companion for all your computing needs, combining power, style, and versatility in a compact and lightweight package.</p>',
            ],
            [
                'ID' => 11,
                'NAME' => 'HP 255 G9 Ryzen 5-5625U/16GB/512/Win11',
                'PRICE' => 1578.0,
                'QUANTITIES_AVAILABLE' => 2,
                'SALE_ID' => null,
                'OLD_PRICE' => 1536.0,
                'DESCRIPTION' => '<h3>HP 255 G9 Ryzen 5-5625U/16GB/512/Win11</h3>
                <p>Experience seamless performance and reliable computing with the HP 255 G9 laptop. Powered by the efficient Ryzen 5-5625U processor, this laptop offers impressive speed and responsiveness for both work and entertainment.</p>
                <p>With 16GB of RAM, multitasking becomes effortless, allowing you to run multiple applications simultaneously without any slowdowns. The spacious 512GB SSD provides ample storage space for your files, documents, and multimedia content while ensuring fast data access and quick boot-up times.</p>
                <p>Equipped with Windows 11, the latest operating system from Microsoft, the HP 255 G9 offers a modern and intuitive computing experience. Enjoy enhanced security features, improved multitasking capabilities, and a sleek user interface designed to maximize productivity.</p>
                <p>The HP 255 G9 boasts a sleek and durable design, making it perfect for both office use and on-the-go computing. Its lightweight construction and long battery life ensure that you can stay productive wherever you go.</p>
                <p>Whether youre working on spreadsheets, streaming HD videos, or browsing the web, the HP 255 G9 Ryzen 5-5625U/16GB/512/Win11 laptop delivers reliable performance and versatility for all your computing needs.</p>',
            ],
            [
                'ID' => 12,
                'NAME' => 'MSI Thin GF63 i5-12450H/16GB/512 RTX2050 144Hz',
                'PRICE' => 1294.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 1242.0,
                'DESCRIPTION' => '<h3>MSI Thin GF63 i5-12450H/16GB/512 RTX2050 144Hz</h3>
                <p>Unleash the power of portable gaming with the MSI Thin GF63 laptop. Featuring the latest Intel Core i5-12450H processor, this laptop delivers exceptional performance for gaming, content creation, and multitasking.</p>
                <p>Equipped with 16GB of DDR4 RAM, the MSI Thin GF63 ensures smooth and responsive performance, allowing you to run multiple applications simultaneously without any lag. The 512GB SSD provides ample storage space for your games, media files, and software, while offering lightning-fast data transfer speeds.</p>
                <p>Experience immersive gaming visuals with the NVIDIA GeForce RTX 2050 graphics card. With its powerful GPU and dedicated video memory, you can enjoy smooth gameplay and stunning graphics on the laptops vibrant 144Hz display.</p>
                <p>The MSI Thin GF63 features a sleek and lightweight design, making it perfect for gaming on the go. Its thin bezels and slim profile enhance the overall aesthetics, while the durable construction ensures long-lasting durability.</p>
                <p>Stay connected and productive with a range of ports, including USB Type-C, HDMI, and more. The laptop also features Wi-Fi 6 support for faster wireless connectivity and Bluetooth compatibility for seamless device pairing.</p>
                <p>Whether youre gaming, working, or streaming content, the MSI Thin GF63 i5-12450H/16GB/512 RTX2050 144Hz laptop offers powerful performance and portability for all your computing needs.</p>',
            ],
            [
                'ID' => 13,
                'NAME' => 'ASUS Vivobook 15 i5-1235U/16GB/512/Win11',
                'PRICE' => 654.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 665.0,
                'DESCRIPTION' => '<h3>ASUS Vivobook 15 i5-1235U/16GB/512/Win11</h3>
                <p>Experience productivity and style with the ASUS Vivobook 15, featuring powerful performance in a sleek and portable design. Powered by the Intel Core i5-1235U processor and equipped with 16GB of RAM, this laptop delivers smooth multitasking and responsiveness for everyday computing tasks.</p>
                <p>With its 15.6-inch Full HD display, the ASUS Vivobook 15 offers vibrant visuals and crisp details, whether youre working on documents, streaming content, or browsing the web. The slim bezel design maximizes screen space, providing an immersive viewing experience without adding bulk to the laptop.</p>
                <p>Featuring a spacious 512GB SSD, this laptop offers ample storage for your files, software, and multimedia content, while ensuring fast boot times and quick access to your data. With Windows 11 pre-installed, youll enjoy the latest features and enhancements for productivity and creativity.</p>
                <p>The ASUS Vivobook 15 combines performance with portability, making it ideal for on-the-go professionals and students. Its lightweight and compact design allow you to take it anywhere, whether youre commuting to work or studying in a coffee shop.</p>
                <p>Equipped with a full range of connectivity options, including USB Type-C, USB 3.2, HDMI, and Wi-Fi 6, the ASUS Vivobook 15 offers seamless connectivity to peripherals, displays, and networks. Stay productive and connected wherever you go with this versatile and reliable laptop.</p>
                <p>Whether youre tackling everyday tasks or working on creative projects, the ASUS Vivobook 15 provides the performance and versatility you need to get things done. With its sleek design, powerful hardware, and convenient features, its the perfect companion for work and play.</p>',
            ],
            [
                'ID' => 14,
                'NAME' => 'Dell Inspiron 3520 i5-1235U/16GB/1TB/Win11 120Hz',
                'PRICE' => 1500.0,
                'QUANTITIES_AVAILABLE' => 2,
                'SALE_ID' => null,
                'OLD_PRICE' => 1550.0,
                'DESCRIPTION' => '<h3>Dell Inspiron 3520 i5-1235U/16GB/1TB/Win11 120Hz</h3>
                <p>Experience superior performance and immersive visuals with the Dell Inspiron 3520. Powered by the Intel Core i5-1235U processor and equipped with 16GB of RAM, this laptop delivers blazing-fast speeds and smooth multitasking for enhanced productivity.</p>
                <p>The Dell Inspiron 3520 features a stunning 120Hz display, offering buttery-smooth visuals and ultra-responsive gameplay. Whether youre editing videos, playing games, or watching movies, the high refresh rate ensures a seamless viewing experience with minimal motion blur.</p>
                <p>With a spacious 1TB hard drive, this laptop provides ample storage for your files, documents, and multimedia content. Store your entire digital library without worrying about running out of space, and enjoy fast access to your data for improved workflow efficiency.</p>
                <p>Pre-installed with Windows 11, the Dell Inspiron 3520 offers the latest features and enhancements for enhanced productivity and creativity. Navigate the user-friendly interface, access your favorite apps with ease, and enjoy seamless integration with Microsoft services.</p>
                <p>Designed for performance and portability, the Dell Inspiron 3520 features a sleek and lightweight design thats perfect for on-the-go professionals and students. Take it with you wherever you go and stay productive, whether youre working from home, at the office, or on the go.</p>
                <p>Equipped with a range of connectivity options, including USB Type-C, USB 3.2, HDMI, and Wi-Fi 6, the Dell Inspiron 3520 offers seamless connectivity to peripherals, displays, and networks. Stay connected and productive wherever you are with reliable and high-speed connections.</p>
                <p>Whether youre tackling demanding work tasks or enjoying multimedia entertainment, the Dell Inspiron 3520 delivers the performance and versatility you need to stay productive and entertained. With its powerful hardware, immersive display, and convenient features, its the perfect laptop for work and play.</p>',
            ],
            [
                'ID' => 15,
                'NAME' => 'Dell Inspiron 3520 i5-1235U/16GB/1TB/Win11 120Hz Srebrny',
                'PRICE' => 920.0,
                'QUANTITIES_AVAILABLE' => 2,
                'SALE_ID' => 2,
                'OLD_PRICE' => 930.0,
                'DESCRIPTION' => '<h3>Dell Inspiron 3520 i5-1235U/16GB/1TB/Win11 120Hz Srebrny</h3>
                <p>Dell Inspiron 3520 to doskonały laptop, który łączy wydajność, elegancję i funkcjonalność. Wyposażony w procesor Intel Core i5-1235U oraz 16GB pamięci RAM, zapewnia niezwykłą szybkość działania i płynne przełączanie się między aplikacjami, abyś mógł skutecznie wykonywać swoje codzienne zadania.</p>
                <p>Laptop Dell Inspiron 3520 w wersji Srebrny wyróżnia się eleganckim wyglądem i solidną konstrukcją, co sprawia, że doskonale sprawdza się zarówno w pracy, jak i podczas relaksu. Matowa powierzchnia obudowy zapewnia odporność na zabrudzenia i zarysowania, a subtelne detale nadają mu wyjątkowy wygląd.</p>
                <p>Wyposażony w ekran o częstotliwości odświeżania 120Hz, laptop Dell Inspiron 3520 Srebrny zapewnia płynne i responsywne doznania wizualne podczas oglądania filmów, przeglądania stron internetowych czy grania w gry. Obraz jest wyraźny, a ruchy płynne, co pozwala w pełni cieszyć się każdą chwilą użytkowania.</p>
                <p>Dzięki 1TB pojemności dysku twardego, masz wystarczająco dużo miejsca na przechowywanie swoich plików, dokumentów i multimediów. Bez względu na to, czy masz dużą kolekcję zdjęć, filmów czy muzyki, zawsze będziesz miał szybki dostęp do swoich danych, co pozwoli Ci efektywnie zarządzać swoimi zasobami.</p>
                <p>Preinstalowany system Windows 11 zapewnia wygodną i intuicyjną obsługę laptopa Dell Inspiron 3520. Dzięki najnowszym funkcjom i ulepszeniom systemu, możesz skutecznie wykonywać swoje zadania, korzystać z ulubionych aplikacji i cieszyć się płynną pracą na co dzień.</p>
                <p>Laptop Dell Inspiron 3520 Srebrny oferuje szeroki zakres funkcji i możliwości, dzięki którym możesz być bardziej produktywny i kreatywny w pracy, nauce czy rozrywce. Z łatwością podłączysz się do różnych urządzeń i sieci, dzięki zróżnicowanym portom i technologiom bezprzewodowym.</p>
                <p>Niezależnie od tego, czy potrzebujesz laptopa do pracy, nauki czy rozrywki, Dell Inspiron 3520 Srebrny spełni Twoje oczekiwania pod względem wydajności, funkcjonalności i designu. Dzięki solidnej konstrukcji, eleganckiemu wyglądowi i zaawansowanym funkcjom, jest to idealne rozwiązanie dla osób poszukujących wszechstronnego i niezawodnego laptopa.</p>',
            ],
            [
                'ID' => 16,
                'NAME' => 'Acer Chromebook 315 N4500/8GB/128/FHD ChromeOS',
                'PRICE' => 556.0,
                'QUANTITIES_AVAILABLE' => 2,
                'SALE_ID' => null,
                'OLD_PRICE' => 578.0,
                'DESCRIPTION' => '<h3>Acer Chromebook 315 N4500/8GB/128/FHD ChromeOS</h3>
                <p>Acer Chromebook 315 to wydajny laptop, który zapewnia niezawodność, szybkość działania i świetne wrażenia użytkowe. Wyposażony w procesor Intel N4500 oraz 8GB pamięci RAM, ten laptop zapewnia płynną pracę i szybkie ładowanie aplikacji, co ułatwia codzienne zadania.</p>
                <p>Dzięki systemowi ChromeOS, Acer Chromebook 315 oferuje wygodną i intuicyjną obsługę oraz dostęp do szerokiej gamy aplikacji dostępnych w sklepie Google Play. Możesz więc swobodnie korzystać z ulubionych aplikacji do pracy, nauki czy rozrywki, mając pewność, że będą działać sprawnie i bezproblemowo.</p>
                <p>Laptop Acer Chromebook 315 wyposażony jest w ekran o rozdzielczości Full HD, który zapewnia wyraźny i ostry obraz. Dzięki temu możesz cieszyć się wysoką jakością wizualną podczas przeglądania stron internetowych, oglądania filmów czy korzystania z aplikacji multimedialnych.</p>
                <p>Z dużą pojemnością dysku SSD 128GB masz wystarczająco dużo miejsca na przechowywanie swoich plików, dokumentów i multimediów. Dodatkowo, korzystając z usług chmury, możesz mieć dostęp do swoich danych z dowolnego miejsca i urządzenia, co zapewnia elastyczność i mobilność w pracy.</p>
                <p>Wytrzymała bateria laptopa Acer Chromebook 315 zapewnia długie godziny pracy bez konieczności częstego ładowania. Dzięki temu możesz spokojnie pracować przez cały dzień bez obaw o utratę zasilania, co zwiększa Twoją produktywność i mobilność.</p>
                <p>Laptop Acer Chromebook 315 to również lekka i kompaktowa konstrukcja, która sprawia, że łatwo go zabrać ze sobą w podróż czy na spotkanie. Zastosowane materiały są trwałe i odporne na uszkodzenia, co zapewnia długotrwałą wydajność i niezawodność użytkowania.</p>
                <p>Podsumowując, Acer Chromebook 315 N4500/8GB/128/FHD ChromeOS to doskonały wybór dla osób poszukujących wydajnego, niezawodnego i łatwego w obsłudze laptopa do pracy, nauki czy rozrywki. Dzięki zaawansowanym funkcjom, wygodnej obsłudze i atrakcyjnemu designowi, spełni oczekiwania nawet najbardziej wymagających użytkowników.</p>',
            ],
            [
                'ID' => 17,
                'NAME' => 'Lenovo Yoga Slim 6-14 i5-1240P/16GB/512/Win11',
                'PRICE' => 850.0,
                'QUANTITIES_AVAILABLE' => 2,
                'SALE_ID' => null,
                'OLD_PRICE' => 855.0,
                'DESCRIPTION' => '<h3>Lenovo Yoga Slim 6-14 i5-1240P/16GB/512/Win11</h3>
                <p>Lenovo Yoga Slim 6-14 to elegancki i wydajny laptop, który zapewnia doskonałą wydajność, mobilność i funkcjonalność. Wyposażony w procesor Intel i5-1240P oraz 16GB pamięci RAM, ten laptop zapewnia płynną pracę i szybkie ładowanie aplikacji, co ułatwia zarówno pracę, jak i rozrywkę.</p>
                <p>Dzięki systemowi Windows 11, Lenovo Yoga Slim 6-14 oferuje nowoczesny interfejs, intuicyjną obsługę oraz dostęp do szerokiej gamy aplikacji dostępnych w sklepie Microsoft Store. Możesz więc swobodnie korzystać z ulubionych programów i narzędzi, mając pewność, że będą działać sprawnie i bezproblemowo.</p>
                <p>Laptop Lenovo Yoga Slim 6-14 wyposażony jest w wyświetlacz o rozdzielczości Full HD, który zapewnia wyraźny i ostry obraz. Dzięki technologii IPS, kolory są naturalne i wiernie odwzorowane, co sprawia, że oglądanie filmów, przeglądanie zdjęć czy korzystanie z aplikacji multimedialnych jest prawdziwą przyjemnością.</p>
                <p>Z dużą pojemnością dysku SSD 512GB masz wystarczająco dużo miejsca na przechowywanie swoich plików, dokumentów i multimediów. Dodatkowo, korzystając z usług chmury, możesz mieć dostęp do swoich danych z dowolnego miejsca i urządzenia, co zapewnia elastyczność i mobilność w pracy.</p>
                <p>Wytrzymała bateria laptopa Lenovo Yoga Slim 6-14 zapewnia długie godziny pracy bez konieczności częstego ładowania. Dzięki temu możesz spokojnie pracować przez cały dzień bez obaw o utratę zasilania, co zwiększa Twoją produktywność i mobilność.</p>
                <p>Laptop Lenovo Yoga Slim 6-14 to również lekka i kompaktowa konstrukcja, która sprawia, że łatwo go zabrać ze sobą w podróż czy na spotkanie. Zastosowane materiały są trwałe i odporne na uszkodzenia, co zapewnia długotrwałą wydajność i niezawodność użytkowania.</p>
                <p>Podsumowując, Lenovo Yoga Slim 6-14 i5-1240P/16GB/512/Win11 to doskonały wybór dla osób poszukujących eleganckiego, wydajnego i niezawodnego laptopa do pracy, nauki czy rozrywki. Dzięki zaawansowanym funkcjom, wygodnej obsłudze i atrakcyjnemu designowi, spełni oczekiwania nawet najbardziej wymagających użytkowników.</p>',
            ],
            [
                'ID' => 18,
                'NAME' => 'Microsoft Surface Laptop Studio I7/32GB/2TB/GeForce',
                'PRICE' => 3900.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 4200.0,
                'DESCRIPTION' => '<h3>Microsoft Surface Laptop Studio I7/32GB/2TB/GeForce</h3>
                <p>Microsoft Surface Laptop Studio to rewolucyjny laptop, który łączy w sobie niezwykłą wydajność, wszechstronność i innowacyjny design. Wyposażony w potężny procesor Intel Core i7, 32GB pamięci RAM, oraz 2TB dysk SSD, ten laptop zapewnia niezrównaną moc obliczeniową i ogromną przestrzeń na przechowywanie danych.</p>
                <p>Dzięki dedykowanej karcie graficznej GeForce, Microsoft Surface Laptop Studio umożliwia płynne i responsywne działanie nawet najbardziej wymagających aplikacji i gier. Wyświetlacz PixelSense o rozdzielczości 4K pozwala cieszyć się niesamowitą ostrością, głębią kolorów i doskonałą jakością obrazu, co sprawia, że każde zadanie staje się prawdziwą przyjemnością.</p>
                <p>Nowoczesny design Microsoft Surface Laptop Studio charakteryzuje się unikalną konstrukcją, która umożliwia płynną zmianę trybu pracy - od tradycyjnego laptopa po kreatywną stację roboczą. Dzięki intuicyjnemu mechanizmowi podnoszenia ekranu, możesz dostosować laptop do swoich potrzeb i wygodnie pracować w dowolnej pozycji.</p>
                <p>Laptop Microsoft Surface Laptop Studio został zaprojektowany z myślą o maksymalnej wygodzie i mobilności. Waga oraz kompaktowe wymiary sprawiają, że możesz zabrać go ze sobą wszędzie, niezależnie od tego, czy pracujesz w biurze, podróżujesz czy pracujesz zdalnie.</p>
                <p>Wytrzymała bateria zapewnia długie godziny pracy bez konieczności ładowania, co pozwala na pełną swobodę działania i produktywności przez cały dzień. Dodatkowo, zintegrowany system Windows 11 zapewnia wygodę użytkowania, nowoczesne funkcje oraz dostęp do szerokiej gamy aplikacji dostępnych w sklepie Microsoft Store.</p>
                <p>Podsumowując, Microsoft Surface Laptop Studio I7/32GB/2TB/GeForce to nie tylko elegancki i wydajny laptop, ale również wszechstronna stacja kreatywna, która pozwala wyrazić swoją twórczość w każdej sytuacji. Dzięki zaawansowanym funkcjom, innowacyjnemu designowi i niezrównanej jakości wykonania, spełni oczekiwania nawet najbardziej wymagających użytkowników.</p>',
            ],
            [
                'ID' => 19,
                'NAME' => 'Microsoft Surface Laptop Studio 2 i7/32GB/1TB/GeForce RTX4050',
                'PRICE' => 4900.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 5200.0,
                'DESCRIPTION' => ' <h3>Microsoft Surface Laptop Studio 2 i7/32GB/1TB/GeForce RTX4050</h3>
                <p>Microsoft Surface Laptop Studio 2 to najnowsza odsłona innowacyjnego laptopa, który łączy elegancję, wydajność i wszechstronność. Wyposażony w potężny procesor Intel Core i7, 32GB pamięci RAM i szybki dysk SSD o pojemności 1TB, ten laptop zapewnia niezrównaną moc obliczeniową i ogromną przestrzeń na przechowywanie danych.</p>
                <p>Dzięki dedykowanej karcie graficznej GeForce RTX4050, Microsoft Surface Laptop Studio 2 oferuje niezrównane możliwości graficzne, zapewniając płynne i responsywne działanie nawet najbardziej wymagających aplikacji i gier. Wyświetlacz PixelSense o rozdzielczości 4K zapewnia niesamowitą jakość obrazu, doskonałą ostrość i szerokie kąty widzenia, co sprawia, że każda praca staje się prawdziwą przyjemnością.</p>
                <p>Innowacyjny design Microsoft Surface Laptop Studio 2 pozwala na płynną zmianę trybu pracy - od tradycyjnego laptopa po kreatywną stację roboczą. Dzięki intuicyjnemu mechanizmowi podnoszenia ekranu, możesz dostosować laptop do swoich potrzeb i wygodnie pracować w dowolnej pozycji.</p>
                <p>Laptop Microsoft Surface Laptop Studio 2 został zaprojektowany z myślą o maksymalnej wygodzie i mobilności. Dzięki swojej lekkości i kompaktowym wymiarom, możesz zabrać go ze sobą wszędzie, niezależnie od tego, czy pracujesz w biurze, podróżujesz czy pracujesz zdalnie.</p>
                <p>Wytrzymała bateria zapewnia długie godziny pracy bez konieczności ładowania, co pozwala na pełną swobodę działania przez cały dzień. Dodatkowo, zintegrowany system Windows 11 zapewnia wygodę użytkowania, nowoczesne funkcje oraz dostęp do szerokiej gamy aplikacji dostępnych w sklepie Microsoft Store.</p>
                <p>Podsumowując, Microsoft Surface Laptop Studio 2 i7/32GB/1TB/GeForce RTX4050 to nie tylko elegancki i wydajny laptop, ale również wszechstronna stacja kreatywna, która pozwala wyrazić swoją twórczość w każdej sytuacji. Dzięki zaawansowanym funkcjom, innowacyjnemu designowi i niezrównanej jakości wykonania, spełni oczekiwania nawet najbardziej wymagających użytkowników.</p>',
            ],
            [
                'ID' => 20,
                'NAME' => 'Fury Shobo SH4F RGB',
                'PRICE' => 84.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 100.0,
                'DESCRIPTION' => '<h3>Fury Shobo SH4F RGB Black computer case</h3>
                    <p>Check out <strong>Fury Shobo SH4F RGB</strong> - a clever computer case with efficient cooling and RGB backlighting. Compatible with ATX motherboards and water cooling systems (AIO 360/280/240/140/120), Shobo SH4F RGB includes as many as 4 RGB fans, a mesh front and dust protection.</p>
                    <p>The futuristic, geometric shape will appeal to both hardcore gamers and supporters of a more subdued design. The left side panel made of tempered glass allows you to display the inside of the case and the powerful components hidden inside - also with RGB, especially since the installed fans are factory-illuminated.</p>
                    <h4>Low temperatures, high efficiency</h4>
                    <p>Thanks to 4 efficient 120 mm RGB fans (one at the back, three at the front) and an open top and mesh front, Shobo SH4F RGB ensures free air flow through the housing. Combined with the possibility of installing an air CPU cooler up to 161 mm and a total of 8 fans (3 × front, 2 × top, 1 × rear, 2 × bottom), we get efficient cooling that can handle really powerful components.</p>
                    <h4>High cooling</h4>
                    <p>Do you want to expand your fragging machine with efficient water cooling? With Fury Shobo SH4F RGB its childs play. The housing allows you to install AIO LC coolers with the following sizes: front (360/280/240/140/120 mm), top (240/120 mm) and rear (120 mm). Such wide compatibility means freedom in selecting components - even the most powerful ones that require really high-end cooling.</p>
                    <h4>Effective dust barrier</h4>
                    <p>Dust penetrating the interior of the case is the nightmare of every computer system. With Fury Shobo SH4F RGB you dont have to worry about that anymore. The housing is completely filtered against dust: from the top and bottom, and the "mesh" front has very dense meshes with a diameter clearly below 1 mm, providing protection against dirt and facilitating free air flow.</p>
                    <h4>Great possibilities in a small housing</h4>
                    <p>While maintaining small external dimensions, the Shobo SH4F RGB case offers full compatibility with ATX, micro-ATX and mini-ITX motherboards. You can fit in it a powerful graphics card up to 330 mm long, up to 3 drives/media (HDD/SSD) and a CPU air cooler up to 161 mm. Two-chamber design with a "basement" for the power supply and numerous cable entries mean no mess and easy organization of components.</p>',
            ],
            [
                'ID' => 21,
                'NAME' => 'Fury Shobo SH4F Tempered Glass',
                'PRICE' => 64.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => 3,
                'OLD_PRICE' => 100.0,
                'DESCRIPTION' => '<h3>SHOBO SH4F GAMING HOUSING – ENCASE YOUR FURY</h3>
                <p>Get your hands on Fury Shobo SH4F - a smart computer case with efficient cooling. Compatible with ATX motherboards and water cooling systems (AIO 360/280/240/140/120), Shobo SH4F has as many as 4 efficient PWM fans, a mesh front and dust protection. Welcome to a world of exciting possibilities and low temperatures!</p>
                
                <h3>LOW TEMPERATURES, HIGH EFFICIENCY</h3>
                <p>Build a beast, not a computer! Thanks to 4 efficient 120 mm PWM fans (one at the back, three at the front) and an open top and mesh front, Shobo SH4F ensures free air flow through the case. Combined with the possibility of installing an air CPU cooler up to 161 mm and a total of 8 fans (3 × front, 2 × top, 1 × rear, 2 × bottom), we get efficient cooling that can cope with really powerful components. Fans of extreme performance can also count on compatibility with integrated AIO LC liquid cooling systems.</p>
                
                <h3>TAKE COOLING TO THE NEXT LEVEL</h3>
                <p>Do you want to expand your fragging machine with efficient water cooling? With Fury Shobo SH4F its childs play! The housing allows you to install AIO LC coolers with the following sizes: front (360/280/240/140/120 mm), top (240/120 mm) and rear (120 mm). Such wide compatibility means freedom in the selection of components - even the most powerful ones that require really high-end cooling.</p>
                
                <h3>EFFECTIVE DUST BARRIER</h3>
                <p>Dust penetrating the inside of the case is the nightmare of every computer system. With Fury Shobo SH4F you dont have to worry about that anymore. The housing is completely filtered against dust: from the top and bottom, and the "mesh" front has very dense meshes with a diameter clearly below 1 mm, providing protection against dirt and facilitating free air flow. Dust collecting on the surface of the mesh filters can be quickly and easily removed using a regular cloth or brush.</p>
                
                <h3>GREAT POSSIBILITIES OF A SMALL HOUSING</h3>
                <p>While maintaining small external dimensions, the Shobo SH4F case offers full compatibility with ATX, micro-ATX and mini-ITX boards. It can accommodate a powerful graphics card up to 330 mm long, up to 3 drives/media (HDD/SSD) and a CPU air cooler up to 161 mm. The two-chamber design with a "basement" for the power supply and numerous cable entries means no mess and easy organization of components.</p>
                
                <h3>YOUR COMMAND CENTER</h3>
                <p>Dont let yourself be limited! The richly equipped top panel will allow you to connect the necessary accessories, such as a camera, pendrive or external drive. There you will find 3 USB-A ports (2 of which are fast USB 3.0, 5 Gbit/s), HD Audio 3.5 mm connectors for headphones and a microphone, power and hard drive LEDs, and power and reset buttons.</p>
                
                <h3>INVINCIBLE POWER, MODERN DESIGN</h3>
                <p>Feast your eyes and show off your equipment to other players! The futuristic, geometric shape will appeal to both hardcore gamers and supporters of a more subdued design. The left side panel made of tempered glass allows you to display the inside of the case and the powerful components hidden inside - also with RGB.</p>',
            ],
            [
                'ID' => 22,
                'NAME' => 'Modecom Siroco ARGB FLOW Midi',
                'PRICE' => 75.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 85.0,
                'DESCRIPTION' => '<h3>MODECOM Siroco ARGB FLOW MIDI</h3>
                <p>If you dream of an efficient and well-functioning computer, you can choose a computer case such as MODECOM Siroco for your dream components. Inside you will find four 140 mm ARGB fans, an ARGB fan controller and practical solutions for building a computer. There are plenty of airy panels for optimal air circulation, and there is also plenty of space for a high CPU cooler and long graphics cards.</p>

                <p>A side panel made of tempered glass in the form of an opening door makes it very convenient to assemble and clean the computer. You can open the door and install components in a simple and convenient way, as well as easily display your configuration. On the top panel of the MODECOM Siroco case you will also find numerous ports, such as USB-C.</p>

                <h3>MODECOM Siroco ARGB FLOW MIDI</h3>
                <p>A place for everything you need</p>
                <p>You can mount up to 6 hard drives in the MODECOM Siroco housing. Its up to you whether you want to install them in a 5x SSD and 1x HDD or 4x SSD and 2x HDD configuration. With gaming graphics cards in mind, the housing is designed to accommodate models with a maximum length of up to 345 mm. The interior of the case also offers space for a CPU cooler up to 180 mm high. There is nothing stopping you from installing a CPU water cooler with a radiator up to 360 mm in size. In the MODECOM Siroco housing, you can mount the power supply in a dedicated tunnel, ensuring optimal and uninterrupted operation. Its maximum length with the mounted disk basket is 210 mm.</p>

                <p>Stylish and efficient cooling</p>
                <p>Airy panels - front and top - are responsible for optimal air flow in MODECOM Siroco. Small openings at the front effectively bring in cool air while keeping dust particles out, while vents at the back and top dissipate heat. Four pre-installed 140 mm ARGB fans guarantee optimal air circulation around all components.</p>

                <p>You can set the backlight color and rotation speed of the installed ARGB fans using the built-in ARGB controller. This gives you even greater options for configuring your computer. The controller allows you to connect up to 5 fans in total.</p>',
            ],
            [
                'ID' => 23,
                'NAME' => 'Phanteks NV5 ARGB Tempered Glass White',
                'PRICE' => 110.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 120.0,
                'DESCRIPTION' => '<h3>Immerse yourself in the world of optimal ventilation and extravagant design with the Phahnteks NV5 case!</h3>
                <p>Phahnteks NV5 is a case designed without compromise when it comes to cooling the components of your PC and its appearance. The upper and side parts of the housing are equipped with a delicate mesh, creating ideal conditions for ensuring adequate air circulation.</p>

                <p>The characteristic element of NV5 is the front and side panel, which are made of tempered glass. The large panel of pieces not only looks stunning in itself, but is a perfect way to display the inside of your computer. Integrated ARGB lighting on the power supply cover allows you to give your system a unique character by illuminating it in the colors of your choice.</p>

                <h3>Impressive airflow</h3>
                <p>When designing the NV5, Phanteks focused on component cooling from the very beginning. The housing is optimized for free air flow. The upper part and one of the side panels are made of mesh ensuring effective air circulation. There is an option to install a fan at the bottom, providing an additional source of fresh air.</p>

                <p>In addition, NV5 allows you to install up to seven 120 mm fans, which guarantees effective cooling at all times. The side wall allows for three fans, the top also accommodates three, and the rear wall accommodates one fan. Additionally, at the bottom of the housing there is space for another fan. Another advantage is the inclined power supply chamber, which improves air circulation at the bottom of the case.</p>

                <h3>Many mounting options for radiators and water cooling</h3>
                <p>If you plan to equip your system with water cooling, the NV5 is the perfect choice. You can place a 360 mm radiator either on the side or on the top of the case. Additionally, there is room for a 120 mm radiator on the back, which is useful if you want to install a small AiO cooler to cool the CPU.</p>

                <h3>Lots of space for gaming equipment</h3>
                <p>NV5 is a spacious case in many respects. You can easily install three 3.5" drives or 4 2.5" drives or a very long ATX power supply (up to 230mm). It is also not afraid of high CPU coolers (up to 180mm)</p>

                <p>The case also supports the installation of E-ATX motherboards and graphics cards with a maximum length of 440mm. Vertical installation is also possible (mounting elements available separately).</p>

                <p>In addition to the standard Power button, the I/O panel also includes an HD-Audio and microphone port, as well as a USB 3.1 Type C port and two USB 3.0 Type A ports, which enable fast data transfer. Additionally, there are two buttons to control ARGB lighting.</p> ',
            ],
            [
                'ID' => 24,
                'NAME' => 'Logic Portos Midi ARGB Black',
                'PRICE' => 50.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 64.0,
                'DESCRIPTION' => '<h3>Logic Portos ARGB Midi Black case</h3>
                <p>Build an efficient and modern gaming computer with Logic Portos ARGB Midi. The device ensures good air flow, smooth operation of components, their safety and low temperatures inside. A side panel made of tempered glass in the form of a door placed on hinges not only facilitates the installation of components, but also allows you to keep the computer clean.</p>
                
                <p><em>The offer applies only to the case with pre-installed fans. Other components visible in the photo are not part of the set.</em></p>
                
                <h3>Logic Portos ARGB Midi Black case</h3>
                <p>Cool interior</p>
                <p>The airy front and top panel significantly facilitates air circulation. Three 120 mm fans at the front and one 120 mm fan at the back of the Logic Portos ARGB Midi case effectively cool heated components. Everything for your comfort and computer security. Installed dust filters protect the interior from dust, even when the computer is turned off.</p>
                
                <p>Easy assembly of components</p>
                <p>Logic Portos ARGB Midi allows for mounting graphics cards up to 340 mm and CPU cooling up to 155 mm. The maximum length of the power supply with the installed disk basket is 200 mm. 7 slots for PCIe expansion cards are the optimal number for mounting, among others: graphics card and network card. You can also install a total of five SSDs and one HDD or four SSDs and two HDDs inside.</p>',
            ],
            [
                'ID' => 25,
                'NAME' => 'Lian Li Lancool 205 Mesh C ARGB Tempered Glass White',
                'PRICE' => 105.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 110.0,
                'DESCRIPTION' => '<h3>Lian Li LANCOOL 205 Mesh C White Computer Case</h3>
                <p>Building an efficient system doesnt have to be difficult. The Lian Li LANCOOL 205 Mesh C case offers a spacious interior where you can accommodate numerous components. Additionally, it ensures worry-free ventilation performance with its pre-installed fans and mesh front panel. The white design will stand out at your gaming station. The manufacturer has installed two switches to control the modes and colors of the ARGB lighting.</p>
                
                <h3>Lian Li LANCOOL 205 Mesh C White Computer Case</h3>
                <p>Spacious Interior</p>
                <p>The Lian Li LANCOOL 205 Mesh C is a Midi Tower design, offering ample space for installing components such as ATX, Micro-ATX, and Mini-ITX motherboards. It can accommodate graphics cards up to 350 mm in length. You can install two 2.5-inch SSDs on separate mounts behind the motherboard tray. Additionally, it can house several other 2.5" and 3.5" drives. The case can fit an ATX power supply up to 165 mm in depth.</p>
                
                <p>Excellent Cooling and Ventilation</p>
                <p>Dont worry about high temperatures inside the Lian Li LANCOOL 205 Mesh C case. It comes equipped with factory-installed ARGB PWM 140 mm fans at the front and one 120 mm fan at the back. Additionally, it features a mesh front panel and numerous ventilation holes for efficient airflow.</p>
                
                <p>The 205 Mesh C also offers extensive options for expanding the cooling system. You can install additional fans as well as water cooling with a radiator up to 280 mm.</p>',
            ],
            [
                'ID' => 26,
                'NAME' => 'Logic Aramis Midi ARGB Black',
                'PRICE' => 50.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 60.0,
                'DESCRIPTION' => '<h3>Logic Aramis ARGB Midi Black Computer Case</h3>
                <p>Logic Aramis ARGB is a case that was created to build an efficient and modern gaming computer. It provides optimal airflow and has pre-installed ARGB fans, which make it a gaming device. Additionally, practical solutions allow for convenient installation of the released components inside. Tempered glass on the side allows you to display the components, positively influencing the design of the entire structure.</p>
                
                <h3>Logic Aramis ARGB Midi Black Computer Case</h3>
                <p>Well-thought-out cooling system</p>
                <p>The ventilated front panel provides air flow thanks to four efficient 120 mm fans. This allows you to effectively cool the installed components inside the Logic Aramis chassis. You can also install two 140 mm fans on the front of the case, instead of the factory-installed ones.</p>
                
                <p> Prepared for the installation of efficient components</p>
                <p>Despite its gaming origins, the Logic Aramis ARGB case will also work well in office tasks and everyday work. The ability to build a universal and efficient computer is undoubtedly its advantage. The interior allows for the installation of a graphics card up to 340 mm, and the maximum height of the CPU cooler can be 155 mm.</p>
                
                <p>Moreover, Logic Aramis Midi allows you to install HDD or SSD drives. At the tunnel level there is a basket for two 3.5" drives or one 3.5" and one 2.5". It is possible to install two additional 2.5" drives on the motherboard tray and two additional 2.5" drives on the wall assembly.</p>',
            ],
            [
                'ID' => 27,
                'NAME' => 'Logic Aramis Mini ARGB White',
                'PRICE' => 40.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 60.0,
                'DESCRIPTION' => '<h3>Logic Aramis ARGB Mini White Case</h3>
                <p>Logic Aramis ARGB Mini is a case designed to build an efficient and modern gaming computer. Optimal airflow, practical solutions, and factory-installed ARGB fans ensure not only an appropriate working environment but also a gaming-like appearance of the station.</p>
                
                <h3>Logic Aramis ARGB Mini White Case</h3>
                <p>Cool interior of the case</p>
                <p>The ventilated front panel provides airflow thanks to two efficient 120 mm fans. This allows you to effectively cool the installed components inside Logic Aramis ARGB Mini, positively influencing their work culture and durability. Optionally, you can install up to two 140 mm fans on the front of the case, instead of the factory-installed ones.</p>
                
                <p>Convenient installation of components</p>
                <p>The Logic Aramis ARGB Mini housing enables the installation of graphics cards up to 290 mm and a CPU cooler up to 160 mm. It also allows the installation of HDD or SSD drives. At the tunnel level, there is a basket for a 2.5/3.5" drive and one 3.5" drive. In turn, it is possible to install an additional x 2.5" drive on the motherboard tray. Four PCIe expansion card slots allow you to install additional accessories.</p>
                
                <p>Gaming nature</p>
                <p>As befits a gaming computer case, Logic Aramis has tempered glass on the side of the case. This makes the inside of the computer clearly visible. Additionally, pre-installed ARGB fans add beauty to the case and gaming station. You can freely change the backlight color from predefined settings using the RESET button on the housing control panel.</p>',
            ],
            [
                'ID' => 28,
                'NAME' => 'ENDORFY Arx 500 ARGB Tempered Glass',
                'PRICE' => 70.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 80.0,
                'DESCRIPTION' => '    <h3>ENDORFY Arx 500 ARGB Case</h3>
                <p>Housings are our middle name. Weve been on this topic for years and its hard to impress us, but the sight of ENDORFY Arx 500 ARGB gives us goosebumps. Its out of pride - although some say its because of the low temperature inside the housing.</p>
                
                <p>We have included our best solutions (including 4 Stratus 140 PWM ARGB). As a result, you get one of the largest (486×228×429 mm, i.e. slightly shorter than the Arx 700 series) ENDORFY cases - with room for a tall cooling system (up to 179 mm), 7 fans and most available graphics cards (up to 350 mm). The outside is also great - with a tempered glass window and front and top panels that act as filters, our ENDORFY Arx 500 ARGB can become a housing master.</p>
                
                <h3>Come get some fresh air!</h3>
                <p>We all know that long hours at work and on the battlefield (yes, there is a difference) = welded components that beg for a break over time. With the Arx 500 ARGB you dont have such actions - the housing helps keep them pleasantly cool even when you take out the components as much as the factory provided.</p>
                
                <p>This is due to the spacious interior, which can accommodate as many as 7 air conditioners and fans. Additionally, the housing panels act as filters - so you dont need additional protection against dust. Compared to traditional solutions, this single layer allows for better air circulation and makes it easier to keep the components in a pleasant draft (because cooling is extremely important to us).</p>
                
                <h3>The Lord of the Rings of the Gales</h3>
                <p>When you look inside the Arx 500 ARGB, you immediately see that there is a specific team of cooling fans working inside. We packed 4 Stratus 140 PWM ARGBs in it - created in cooperation with Synergy Cooling, so you can be sure of adequate air flow and low temperature. Because winter never surprises us.</p>
                
                <p>The Stratus 140 PWM ARGB is our favorite. Its 14 cm tall, has an optional semi-passive mode and a durable FDB bearing, so you can count on quiet and smooth operation even in extreme conditions. We also added a splitter to control the fan speed using a PWM signal from one motherboard connector. With such a package, you are like a real Lord of the Rings of the Gales.</p>
                
                <h3>Panels with filters <3</h3>
                <p>If we were to talk about the best - in our opinion - option in the Arx 500 ARGB, we would choose excellent ventilation. This is provided, among others, (right after great fans) by panels made of finely perforated sheet metal. Some people will probably say that they can be replaced with put-on filters - but the truth is that the double anti-dust layer limits the air flow like metal armor in LARPs.</p>
                
                <p>And no one likes to have welded... components.</p>
                
                <p>Thats why we made sure that the panels (front and top) in our case act as filters. This single protective layer makes the inside of the case as cool as a winter morning, and you dont have to install additional dust protection. Additionally, you can remove each filter and clean it with a cloth or a vacuum cleaner (or rinse it under running water) - and it will take you literally a moment.</p>
                
                <h3>Mister of casings</h3>
                <p>Weve already said it, but well say it again - if there is ever a Mr. Housing election, the Arx 500 ARGB has a chance to be on the podium. All we need to do is turn on the ARGB-lit fans inside and the title is ours. The tempered glass side highlights them like a dream.</p>
                
                <h3>Everythings all right!</h3>
                <p>If someone asked us to describe the Arx 500 ARGB in three words, we would say: "Everything is fine!" Literally - its one of our largest cases, so it easily fits everything thats most important to you. Of course, we mean components.</p>
                
                <p>Arx 500 ARGB is 486×228×429 mm, so you can pack a lot inside - for example, a tall cooling system (up to 179 mm), 7 fans (including 4 you get from us at the start) and most graphics cards available on the market (up to 350mm). There will also be a large power supply - you can mount it in the position that is most convenient for you. Its installation is not a philosophy, because we have added, among other things, a dedicated mounting frame.</p>
                
                <h3>Light at the end of the housing tunnel</h3>
                <p>Equipment without backlight is ok, but its nice to see the light at the end of the tunnel sometimes. With Arx 500 ARGB you have this option - with just one click (the RESET button on the top of the housing is responsible for control), your components will be illuminated with a cosmic glow. Thank your ARGB fans for that.</p>
                
                <p>Thanks to 4 Stratus 140 PWM ARGB lights (we installed them in the housing for you), you can freely configure the backlight. You can set them up in just a moment thanks to the built-in PWM and ARGB controllers - everything is immediately connected into one working whole, compatible with ENDORFY products with the ARGB mark (and compatible products from other manufacturers), so you can easily synchronize the backlight of the entire set based on Arx 500 ARGB.</p>',
            ],
            [
                'ID' => 29,
                'NAME' => 'AiO Arctic Liquid Freezer II 280 OUTLET water',
                'PRICE' => 44.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 50.0,
                'DESCRIPTION' => '<h3>Arctic Liquid Freezer II 280: Efficient liquid cooling for gaming computers</h3>
                <p>Powerful computers require efficient components, and in such cases, liquid cooling becomes necessary. One of the best solutions of this type is Arctic Liquid Freezer II 280, which provides not only excellent performance, but also low noise level.</p>
                <h4>New, improved pump</h4>
                <p>The Arctic Liquid Freezer II 280 cooler uses a new, improved pump that ensures high CPU cooling efficiency with minimal noise. Thanks to the manufacturers years of experience in the field of liquid cooling, this pump is reliable and effective even in the most demanding conditions.</p>
                <h4>Tidy in the housing</h4>
                <p>The extremely aesthetic Arctic Liquid Freezer II 280 cooler not only ensures the appropriate temperature of computer components, but also keeps the case tidy. Thanks to integrated cable management, the inside of the computer remains clean and tidy, which is important for aesthetics and airflow.</p>
                <h4>Efficient fans</h4>
                <p>Arctic Liquid Freezer II 280 is equipped with two P-type fans that guarantee fast heat transfer thanks to their high static and efficiency. Additionally, a 40 mm fan located next to the pump helps cool the VRM systems, which prevents overheating even during intensive use.</p>
                <p>The minimum fan speed is 800 rpm, and the maximum - 2000 rpm.</p>
                <h4>High quality workmanship and warranty</h4>
                <p>The Arctic Liquid Freezer II 280 radiator is made of high-quality aluminum and copper alloys, which guarantees effective heat dissipation. This cooler is compatible with Intel and AMD sockets, which makes it universal and easy to install.</p>
                <p>Arctic Liquid Freezer II 280 is covered by an impressive 72-month warranty, which ensures its reliability and durability.</p>',
            ],
            [
                'ID' => 30,
                'NAME' => 'AiO ENDORFY Navis F280 OUTLET',
                'PRICE' => 45.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => 4,
                'OLD_PRICE' => 56.0,
                'DESCRIPTION' => '<h3>Endorfy Navis F280: High-Efficiency AIO Liquid Cooling Solution</h3>
            <p>Get ready for top-tier cooling performance without the hassle of fan noise with the Endorfy Navis F280 AIO liquid cooling set. Designed to meet the demands of even high-energy processors, this cooling solution ensures efficient heat dissipation to keep your system running smoothly.</p>
            <h4>Efficient Pump and Fluctus Fans</h4>
            <p>The central component of the Navis F280 is its block pump featuring a ceramic bearing and PWM control, ensuring optimal performance and quiet operation. Paired with two Fluctus 140mm fans, which operate at lower speeds while delivering excellent cooling performance, this AIO liquid cooling set guarantees efficient heat dissipation without unnecessary noise.</p>
            <h4>Quiet Operation</h4>
            <p>The Navis F280 is engineered for whisper-quiet operation, allowing you to focus on your tasks or gaming sessions without being disturbed by fan noise. The Fluctus fans are designed with precisely profiled blades to cover the radiator fins effectively, reducing noise levels to a minimum. Additionally, the wavy edge design further minimizes noise for a peaceful computing experience.</p>
            <h4>Exceptional Cooling Efficiency</h4>
            <p>With its specially designed asymmetric water block and efficient pump with PWM control, the Navis F280 offers one of the best cooling efficiencies in its class. Whether youre working or gaming, this cooling solution ensures that your system remains cool and quiet, even during extended use.</p>
            <h4>Flexible Installation Options</h4>
            <p>The Navis F280 features flexible hoses, allowing you to install the cooler in any position inside your computer for maximum convenience. The approximately 39 cm long hoses provide ample flexibility for hassle-free installation.</p>
            <h4>Included Pactum PT-3 Thermal Paste</h4>
            <p>The package includes a tube of Pactum PT-3 thermal paste, ensuring efficient heat transfer between the CPU and the water block. With this high-quality thermal paste, you can enjoy worry-free installations and optimal cooling performance.</p>
            <p>Please note that this item comes from a consumer return and may exhibit normal signs of use and/or damaged packaging. However, rest assured that the equipment is thoroughly checked and fully functional.</p>',
            ],
            [
                'ID' => 31,
                'NAME' => 'AiO Arctic Liquid Freezer III 420 Black',
                'PRICE' => 75.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 80.0,
                'DESCRIPTION' => '<h3>Liquid Freezer III: High-Performance Cooling Solution</h3>
                <p>The Liquid Freezer III is the perfect solution for demanding users seeking excellent performance and whisper-quiet operation. With its new, optimized CPU power section fan and increased water channels, this cooling system ensures stable temperatures even under heavy loads.</p>
                <h4>Efficient Cooling for Enthusiasts</h4>
                <p>Designed for computer enthusiasts, the Liquid Freezer III offers simple installation and exceptional efficiency. The improved VRM fan provides near-silent ventilation, prolonging the lifespan of components and maintaining optimal performance.</p>
                <h4>Ready-to-Use AiO Kit</h4>
                <p>The Liquid Freezer III comes ready to use straight out of the box, making it hassle-free to set up. With a wide range of variants available, including different heatsink sizes and lighting options, theres a Liquid Freezer III model to meet the needs of even the most discerning users.</p>
                <h4>Modern Design and Performance</h4>
                <p>Combining modern design with high performance, the Liquid Freezer III is the ideal choice for those who prioritize aesthetics and functionality. Whether youre a gamer, content creator, or power user, this cooling solution offers the perfect balance of style and performance.</p>',
            ],
            [
                'ID' => 32,
                'NAME' => 'AiO Arctic Liquid Freezer III 420 ARGB White',
                'PRICE' => 100.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 120.0,
                'DESCRIPTION' => '<h3>The Liquid Freezer III: Ultimate Cooling Performance</h3>
                <p>The Liquid Freezer III is the perfect solution for demanding users who require excellent performance and silent operation. Equipped with a new, optimized CPU power section fan and an increased number of water channels, the Liquid Freezer III ensures stable temperatures even under heavy loads.</p>
                <h4>Designed for Enthusiasts</h4>
                <p>This cooling system is tailored for computer enthusiasts, offering straightforward installation and exceptional efficiency. The upgraded VRM fan delivers near-silent ventilation, promoting longevity for your components.</p>
                <h4>Ready-to-Use All-in-One Kit</h4>
                <p>With the Liquid Freezer III, you can start cooling your system right out of the box. It comes in a variety of versions, featuring different heatsink sizes and lighting options, catering to the needs of the most discerning users.</p>
                <h4>Modern Design and Superior Performance</h4>
                <p>The Liquid Freezer III combines sleek, modern design with unparalleled performance. Whether you prioritize aesthetics or functionality, this cooling solution delivers on both fronts, making it the ideal choice for users who demand the best.</p>',
            ],
            [
                'ID' => 33,
                'NAME' => 'AiO EK Water Blocks EK-Nucleus CR360 Lux D-RGB White 360mm',
                'PRICE' => 170.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 200.0,
                'DESCRIPTION' => '    <h3>EK-Nucleus AIO Lux Liquid Cooling: Exceptional Design and Performance Awarded iF Design Award</h3>
                <p>Elegant and innovative - EK-Nucleus AIO Lux, winner of the prestigious iF Design award, is a real breakthrough in the field of liquid cooling. Designed specifically for the latest Intel® 13th Gen (LGA 1700) and AMD® Ryzen™ 7000 (AM5) processors, it provides ultra-low temperatures, backed by a 5-year warranty for complete peace of mind.</p>
                <h4>Elegance in Two Colors</h4>
                <p>Available in black and white, the EK-Nucleus AIO Lux not only looks great, but also offers full customization with addressable D-RGB lighting. The tunnel light effect on the pump cover turns your system into a real symphony of light. The cooling system is also equipped with aesthetic braided hoses.</p>
                <h4>Easy Installation</h4>
                <p>With EK-Nucleus, installation becomes childs play. Universal compatibility includes the latest processors on AM5 and LGA 1700 sockets, and installation is hassle-free thanks to tool-free pump assembly, a modern EK-OmniLink connector and aluminum swivel connectors. Once installed, the Nucleus AIO requires no maintenance as it comes pre-filled with coolant.</p>
                <h4>Individual Symphony of Light (or Darkness)</h4>
                <p>With fully customizable D-RGB lighting, you can personalize your AiO EK-Nucleus to match your PC setup. A spectrum of colors, smooth transitions and effects that change with one click. Compatibility with RGB software such as ASUS Aura Sync, Gigabyte RGB Fusion 2 and MSI Mystic Light enables even wider possibilities.</p>
                <p>Dont like RGB? No worries! EK-Nucleus AIO Dark is a black, light-free option for those who prefer a dark style for their PC.</p>
                <h4>Built on 15+ Years of Liquid Cooling Experience</h4>
                <p>With over 15 years of experience in the liquid cooling industry, EK-Nucleus AIO ensures ultra-low temperatures even during the most intense gaming sessions.</p>
                <h4>Quiet Operation, High Efficiency</h4>
                <p>EK-Nucleus AIO offers not only performance, but also quiet operation, thanks to the latest EK-Loop FPT fans and intelligent cable integration using the EK-OmniLink system.</p>
                <h4>Highest Quality without Compromise</h4>
                <p>EK-Nucleus is synonymous with the highest quality. Meticulous quality control, rigorous production process and modern technology combine to deliver a product with extraordinary durability and reliability. This is also confirmed by a long, 5-year manufacturers warranty.</p>',
            ],
            [
                'ID' => 34,
                'NAME' => 'CPU Valkyrie Vind SL125 Białe',
                'PRICE' => 50.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 60.0,
                'DESCRIPTION' => '<h3>Valkyrie Vind SL125 White: Efficient Air Cooling for Demanding Tasks</h3>
                    <p>The Valkyrie Vind SL125 White offers a white air cooling solution designed to tackle even the most demanding challenges. With perfect heat distribution, high-performance fans, and a powerful radiator, this cooler ensures your processor stays cool during intense gaming and strenuous tasks.</p>
                    <h4>Advanced Heat Exchanger Design</h4>
                    <p>The Valkyrie Vind SL125 White features a specially designed heat exchanger with six copper heat pipes and a copper base, ensuring quick and effective heat dissipation to the radiator.</p>
                    <p>The dense fins on the heat sink ensure high efficiency, while their regular placement minimizes air flow resistance, resulting in exceptionally low temperatures.</p>
                    <h4>Powerful Cooling Fans</h4>
                    <p>The Valkyrie X12 fans provide powerful air circulation, with a blade design that maximizes airflow (80 CFM) at high static pressure (3.14 mm H2O). Despite their high performance, these fans operate quietly at just 29 dBA.</p>
                    <h4>Customizable RGB Lighting</h4>
                    <p>Enhancing its aesthetic appeal, the cooler features addressable RGB lighting integrated into both the heat sink and fans. With the dedicated Valkyrie software, users can personalize the backlight to match their mood, other components, or favorite games.</p>
                    <h4>Easy Installation and Compatibility</h4>
                    <p>The Valkyrie Vind SL125 White kit is compatible with most popular AMD and Intel processors, offering easy installation and support for AM5, AM4, and various Intel sockets including LGA 1700, 1200, 1151, 1150, 1155, and 1156. The kit includes all necessary elements for assembly, including thermal paste.</p>',
            ],
            [
                'ID' => 35,
                'NAME' => 'CPU Valkyrie Vind SL125 Czarne',
                'PRICE' => 55.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 65.0,
                'DESCRIPTION' => '<h3>Valkyrie Vind SL125 Black: Powerful Air Cooling for Demanding Tasks</h3>
                <p>The Valkyrie Vind SL125 Black offers an air cooling solution designed to tackle the most challenging tasks. With perfect heat distribution, high-performance fans, and a powerful radiator, this cooler ensures your processor remains cool during intense gaming sessions and demanding tasks.</p>
                <h4>Advanced Heat Exchanger Design</h4>
                <p>The Valkyrie Vind SL125 Black features a specially designed heat exchanger with six copper heat pipes and a copper base, ensuring quick and effective heat dissipation to the radiator.</p>
                <p>The dense fins on the heat sink ensure high efficiency, while their regular placement minimizes air flow resistance, allowing for very low temperatures.</p>
                <h4>Powerful Cooling Fans</h4>
                <p>The Valkyrie X12 fans provide powerful air circulation, with a 120 mm blade design that delivers maximum airflow (80 CFM) at high static pressure (3.14 mm H2O). Despite their high performance, these fans operate quietly at just 29 dBA.</p>
                <h4>Customizable RGB Lighting</h4>
                <p>Enhancing its aesthetic appeal, the cooler features addressable RGB lighting integrated into both the heat sink and fans. With the dedicated Valkyrie software, users can personalize the backlight to match their mood, other components, or favorite games.</p>
                <h4>Easy Installation and Compatibility</h4>
                <p>The Valkyrie Vind SL125 Black kit is compatible with most popular AMD and Intel processors, offering easy installation and support for AM5, AM4, and various Intel sockets including LGA 1700, 1200, 1151, 1150, 1155, and 1156. All necessary elements for assembly, including thermal paste, are included in the kit.</p>',
            ],
            [
                'ID' => 36,
                'NAME' => 'Jonsbo CR-1400 CPU ARGB 92mm Black',
                'PRICE' => 20.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 30.0,
                'DESCRIPTION' => '<h3>Jonsbo CR-1400: Effective CPU Cooler with Elegant Design</h3>
                <p>Elevate your processors performance with the Jonsbo CR-1400, a potent cooler that not only safeguards your components from overheating but also adds a touch of elegance to your computer setup. Learn why the Jonsbo CR-1400 is the preferred choice for gaming enthusiasts and IT professionals alike.</p>
                <h4>Powerful Cooling with Stylish Design</h4>
                <p>The Jonsbo CR-1400 boasts a sleek black and silver tower design that not only delivers exceptional performance but also stands out visually. Featuring a quiet 92mm PWM fan with ARGB illumination, this cooler effectively maintains CPU temperatures while adding a stylish flair to your system.</p>
                <h4>Details of Jonsbo CR-1400 - Power and Elegance Combined</h4>
                <p>The Jonsbo CR-1400 is a robust tower cooler designed for both AMD and Intel processors. Four copper heat pipes ensure rapid heat dissipation, while the included 92mm fan with ARGB LEDs provides eye-catching illumination. The PWM fan operates at speeds ranging from 900 to 2300 rpm, delivering a maximum noise level of just 30.5 db(A) with an airflow volume of 61.1 m³/h.</p>
                <p>This tower cooler features integrated ARGB lighting on the top cover and fan, with lighting control available through compatible motherboards. The Jonsbo CR-1400 is compatible with a wide range of popular sockets from both AMD and Intel platforms.</p>
                <p>Choose the Jonsbo CR-1400 and experience not only enhanced thermal performance for your processor but also the modern, designer aesthetic for your computer setup. Discover the perfect blend of cooling power and style with the Jonsbo CR-1400!</p>',
            ],
            [
                'ID' => 37,
                'NAME' => 'Noctua NH-U14S 140mm',
                'PRICE' => 120.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 130.0,
                'DESCRIPTION' => '<h3>Noctua NH-U14S: Exceptional Performance, Reliability, and Low Noise</h3>
                <p>The Noctua NH-U14S stands out as one of the premier CPU coolers available on the market, renowned for its outstanding performance, reliability, and minimal noise output, making it an ideal solution for even the most demanding users.</p>
                <p>Designed with the latest processors in mind, the NH-U14S effectively dissipates heat generated during intensive use, ensuring long-term stability and optimal performance. This cooling solution features six copper heat pipes encased in an aluminum frame, enabling excellent airflow and efficient cooling for even the most demanding processors.</p>
                <p>The NH-U14S is equipped with the NF-A15 PWM fan, renowned for its exceptional performance and minimal noise levels. Enhanced with advanced technologies like AAO Frame and SSO2 Bearing, this fan delivers high efficiency and longevity, ensuring reliable operation over extended periods.</p>
                <p>In addition to its exceptional performance, the NH-U14S boasts an elegant design that seamlessly complements any computer setup. With dimensions of 165 x 150 x 52 mm and a weight of only 935 g, this cooler is both compact and easy to install, making it a practical choice for users seeking both performance and convenience.</p>
                <p>In summary, the Noctua NH-U14S offers unparalleled performance, stability, and aesthetics for users who demand the best from their computer cooling solutions. With advanced technological features and a sleek design, the NH-U14S sets the standard for CPU cooling</p>',
            ],
            [
                'ID' => 38,
                'NAME' => 'ENDORFY Spartan 5 MAX ARGB',
                'PRICE' => 25.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 35.0,
                'DESCRIPTION' => '<h3>ENDORFY Arx 500 ARGB: Elevate Your PC Experience with Style and Performance</h3>
                <p>When it comes to PC casings, ENDORFY has been a household name for years. But the sight of the ENDORFY Arx 500 ARGB still gives us goosebumps - not just out of pride, but because of the cool temperatures it maintains inside.</p>
                
                <p>Featuring our best solutions, including 4 Stratus 140 PWM ARGB fans, the ENDORFY Arx 500 ARGB offers ample space for tall cooling systems, up to 7 fans, and most available graphics cards. With dimensions of 486×228×429 mm, its slightly shorter than the Arx 700 series but packs just as much punch.</p>
                
                <h3>Come Get Some Fresh Air!</h3>
                <p>The Arx 500 ARGB ensures your components stay pleasantly cool even during long gaming sessions or intense workloads. With space for up to 7 fans and integrated panel filters, it provides excellent airflow without the need for additional dust protection.</p>
                
                <h3>The Lord of the Rings of the Gales</h3>
                <p>The Arx 500 ARGB comes equipped with 4 Stratus 140 PWM ARGB fans, ensuring optimal airflow and low temperatures. These fans, created in collaboration with Synergy Cooling, feature a durable FDB bearing and optional semi-passive mode for quiet operation even under extreme conditions.</p>
                
                <h3>Panels with Filters <3</h3>
                <p>Our finely perforated sheet metal panels act as filters, ensuring excellent ventilation without restricting airflow. These panels, located on the front and top of the case, can be easily removed and cleaned, keeping your components cool and dust-free.</p>
                
                <h3>Mister of Casings</h3>
                <p>If there were ever a "Mr. Housing" contest, the Arx 500 ARGB would be a strong contender. With its ARGB-lit fans and tempered glass side panel, its a sight to behold.</p>
                <h3>Everythings All Right!</h3>
                <p>In three words, the Arx 500 ARGB can be described as "Everything is fine!" With ample space for components, stylish design, and customizable ARGB lighting, its the perfect housing solution for any PC enthusiast.</p>
                <h3>Light at the End of the Housing Tunnel</h3>
                <p>With the Arx 500 ARGB, you can bring your PC to life with customizable ARGB lighting. Control the lighting with a single click and synchronize it with other ENDORFY ARGB products for a cohesive look.</p>',
            ],
            [
                'ID' => 39,
                'NAME' => 'Lexar 1TB M.2 PCIe Gen4 NVMe NM800 Pro',
                'PRICE' => 125.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 135.0,
                'DESCRIPTION' => '<h3>Lexar 1TB M.2 PCIe Gen4 NVMe NM800 Pro: High-Speed Storage for Enhanced Performance</h3>
                <p>The Lexar 1TB M.2 PCIe Gen4 NVMe NM800 Pro is a top-of-the-line solid-state drive (SSD) designed to deliver exceptional speed and reliability for demanding computing tasks. With its PCIe Gen4 interface and NVMe protocol support, this SSD offers blazing-fast read and write speeds, making it an ideal choice for gamers, content creators, and professionals.</p>
                <h3>Exceptional Speed and Performance</h3>
                <p>Featuring cutting-edge PCIe Gen4 technology, the Lexar NM800 Pro SSD delivers sequential read speeds of up to [insert speed] and sequential write speeds of up to [insert speed], significantly reducing load times and improving overall system responsiveness. Whether youre gaming, editing high-resolution videos, or running resource-intensive applications, this SSD ensures smooth performance and accelerated data transfer.</p>
                <h3>Reliable Storage Solution</h3>
                <p>Lexar is renowned for producing high-quality storage solutions, and the NM800 Pro SSD is no exception. Built with premium NAND flash memory and advanced controller technology, this SSD offers durability, reliability, and endurance for long-term usage. Additionally, with its M.2 form factor, the NM800 Pro is compatible with a wide range of desktops, laptops, and ultrabooks, allowing for easy installation and seamless integration into your system.</p>
                <h3>Enhanced Productivity and Efficiency</h3>
                <p>Upgrade your system with the Lexar NM800 Pro SSD and experience faster boot times, quicker application launches, and improved overall system performance. With its large 1TB capacity, youll have ample space to store your operating system, software applications, games, and multimedia files, helping you stay productive and efficient in your daily computing tasks.</p>',
            ],
            [
                'ID' => 40,
                'NAME' => 'Lexar 1TB M.2 PCIe Gen4 NVMe NM790',
                'PRICE' => 105.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 115.0,
                'DESCRIPTION' => '<h3>Lexar 1TB M.2 PCIe Gen4 NVMe NM790: High-Speed Storage Solution</h3>
                <p>The Lexar 1TB M.2 PCIe Gen4 NVMe NM790 is a high-performance solid-state drive (SSD) designed to provide lightning-fast data transfer speeds and reliable storage for demanding computing tasks. With its PCIe Gen4 interface and NVMe protocol support, this SSD offers exceptional performance and efficiency, making it an excellent choice for gamers, content creators, and professionals.</p>
                <h3>Blazing Fast Speeds</h3>
                <p>Equipped with advanced PCIe Gen4 technology, the Lexar NM790 SSD delivers impressive sequential read speeds of up to [insert speed] and sequential write speeds of up to [insert speed], significantly reducing load times and improving overall system responsiveness. Whether youre gaming, editing high-definition videos, or multitasking with resource-intensive applications, this SSD ensures smooth and efficient performance.</p>
                <h3>Reliable Performance</h3>
                <p>Lexar is known for its commitment to quality and reliability, and the NM790 SSD upholds this tradition. Built with premium NAND flash memory and a robust controller, this SSD offers durability, stability, and long-term reliability for continuous usage. Additionally, the M.2 form factor ensures compatibility with a wide range of desktops, laptops, and ultrabooks, allowing for easy installation and seamless integration into your system.</p>
                <h3>Enhanced Productivity</h3>
                <p>Upgrade your system with the Lexar NM790 SSD and experience enhanced productivity and efficiency. With its generous 1TB storage capacity, youll have ample space to store your operating system, applications, games, and multimedia files, allowing you to work, create, and play without limitations. Say goodbye to slow loading times and hello to a smoother computing experience with the Lexar NM790 SSD.</p>',
            ],
            [
                'ID' => 41,
                'NAME' => 'Lexar 1TB M.2 PCIe Gen4 NVMe NM710',
                'PRICE' => 95.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 105.0,
                'DESCRIPTION' => '<h3>Lexar 1TB M.2 PCIe Gen4 NVMe NM710: High-Speed Storage Solution</h3>
                <p>The Lexar 1TB M.2 PCIe Gen4 NVMe NM710 offers lightning-fast data transfer speeds and reliable storage performance, making it an ideal solution for demanding computing tasks. With its PCIe Gen4 interface and NVMe protocol support, this SSD delivers exceptional performance and efficiency, enhancing your overall computing experience.</p>
                <h3>Exceptional Speed and Performance</h3>
                <p>Experience blazing-fast speed and responsiveness with the Lexar NM710 SSD. With read speeds of up to [insert speed] and write speeds of up to [insert speed], this SSD accelerates your system boot-up times, application launches, and file transfers, allowing you to work, play, and create without delays or interruptions.</p>
                <h3>Reliable and Durable</h3>
                <p>Designed for reliability and durability, the Lexar NM710 SSD is built with high-quality NAND flash memory and a robust controller, ensuring long-term performance and stability. Whether youre gaming, editing videos, or multitasking with resource-intensive applications, this SSD delivers consistent and reliable performance, even under heavy workloads.</p>
                <h3>Easy Installation and Compatibility</h3>
                <p>The M.2 form factor of the Lexar NM710 SSD ensures easy installation in compatible desktops, laptops, and ultrabooks. With its compact design and plug-and-play functionality, upgrading your system with this SSD is a hassle-free process. Plus, with a generous 1TB storage capacity, youll have ample space to store your operating system, applications, and multimedia files.</p>
                <h3>Enhanced Productivity</h3>
                <p>Boost your productivity and workflow efficiency with the Lexar NM710 SSD. Whether youre a professional, content creator, or enthusiast gamer, this SSD empowers you to achieve more with faster data access and improved system performance. Say goodbye to slow loading times and hello to a smoother computing experience with the Lexar NM710 SSD.</p>',
            ],
            [
                'ID' => 42,
                'NAME' => 'Lexar 1TB M.2 PCIe Gen3 NVMe NM620',
                'PRICE' => 65.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 75.0,
                'DESCRIPTION' => '<h3>Lexar 1TB M.2 PCIe Gen3 NVMe NM620: Reliable High-Speed Storage</h3>
                <p>The Lexar 1TB M.2 PCIe Gen3 NVMe NM620 SSD offers high-speed performance and reliable storage capacity, making it an excellent choice for upgrading your system. With its PCIe Gen3 interface and NVMe protocol support, this SSD delivers fast data transfer speeds and responsive computing performance for a wide range of applications.</p>
                <h3>Fast Data Transfer Speeds</h3>
                <p>Experience rapid data transfer speeds with the Lexar NM620 SSD. With read speeds of up to [insert speed] and write speeds of up to [insert speed], this SSD accelerates system boot-up times, application launches, and file transfers, allowing you to work and play without delays.</p>
                <h3>Reliable Performance</h3>
                <p>Built with high-quality NAND flash memory and a reliable controller, the Lexar NM620 SSD delivers consistent performance and durability. Whether youre gaming, editing multimedia content, or multitasking with demanding applications, this SSD ensures smooth operation and responsiveness.</p>
                <h3>Easy Installation</h3>
                <p>The M.2 form factor of the Lexar NM620 SSD makes it easy to install in compatible desktops, laptops, and ultrabooks. With its plug-and-play functionality, upgrading your system with this SSD is a simple and hassle-free process, allowing you to enjoy faster performance in no time.</p>
                <h3>Ample Storage Capacity</h3>
                <p>With a generous 1TB storage capacity, the Lexar NM620 SSD provides ample space to store your operating system, applications, games, and multimedia files. Whether youre a professional user or an enthusiast gamer, youll have plenty of room to store your digital content and enjoy faster access to your data.</p>
                <h3>Enhanced Productivity</h3>
                <p>Boost your productivity and workflow efficiency with the Lexar NM620 SSD. Whether youre performing everyday computing tasks or demanding workloads, this SSD enables you to achieve more with its high-speed performance and responsive operation. Say goodbye to slow loading times and hello to improved productivity with the Lexar NM620 SSD.</p>',
            ],
            [
                'ID' => 43,
                'NAME' => 'MSI 2TB M.2 PCIe Gen4 NVMe Spatium M482',
                'PRICE' => 150.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 165.0,
                'DESCRIPTION' => '<h3>MSI 2TB M.2 PCIe Gen4 NVMe Spatium M482: Unleash Next-Level Storage Performance</h3>
                <p>The MSI 2TB M.2 PCIe Gen4 NVMe Spatium M482 SSD is engineered to deliver unparalleled storage performance, reliability, and capacity, elevating your computing experience to new heights. Designed for enthusiasts, gamers, and content creators, this SSD offers lightning-fast data transfer speeds and ample storage space to accommodate your growing digital needs.</p>
                <h3>Unmatched Speed and Efficiency</h3>
                <p>Experience blazing-fast data transfer speeds with the MSI Spatium M482 SSD. Leveraging PCIe Gen4 technology and NVMe protocol support, this SSD achieves read speeds of up to [insert speed] and write speeds of up to [insert speed], ensuring rapid access to your files, applications, and games. Say goodbye to long load times and hello to seamless performance.</p>
                <h3>High-Capacity Storage</h3>
                <p>With a spacious 2TB storage capacity, the MSI Spatium M482 SSD provides ample room to store your operating system, games, multimedia files, and productivity software. Whether youre a content creator working with large video files or a gamer with an extensive library of titles, this SSD offers the storage space you need to keep everything organized and easily accessible.</p>
                <h3>Reliable and Durable</h3>
                <p>Engineered for durability and reliability, the MSI Spatium M482 SSD features high-quality NAND flash memory and a robust controller, ensuring long-term performance and data integrity. Built to withstand the rigors of daily use, this SSD offers peace of mind knowing that your valuable data is safe and secure.</p>
                <h3>Advanced Cooling Design</h3>
                <p>Equipped with an advanced cooling design, the MSI Spatium M482 SSD maintains optimal operating temperatures even during intense workloads. The heat spreader and thermal pads efficiently dissipate heat, preventing thermal throttling and ensuring consistent performance under any workload.</p>
                <h3>Enhanced Productivity and Gaming Experience</h3>
                <p>Boost your productivity and gaming experience with the MSI Spatium M482 SSD. Whether youre editing high-resolution videos, rendering 3D graphics, or enjoying immersive gaming sessions, this SSD accelerates your workflow and enhances overall system responsiveness, allowing you to focus on what matters most.</p>
                <h3>Easy Installation and Compatibility</h3>
                <p>Featuring an M.2 form factor, the MSI Spatium M482 SSD is easy to install in compatible desktops, laptops, and ultrabooks. With its plug-and-play functionality and wide compatibility, upgrading your system with this SSD is a breeze, ensuring a seamless transition to next-level storage performance.</p>',
            ],
            [
                'ID' => 44,
                'NAME' => 'HIKSEMI Future 1TB M.2 2280 PCI-E x4 Gen4 NVMe',
                'PRICE' => 125.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 135.0,
                'DESCRIPTION' => '<h3>HIKSEMI Future 1TB M.2 2280 PCI-E x4 Gen4 NVMe: Redefining Storage Performance</h3>
                <p>Experience the future of storage with the HIKSEMI Future 1TB M.2 2280 PCI-E x4 Gen4 NVMe SSD. Engineered to deliver unparalleled speed, reliability, and efficiency, this SSD revolutionizes your computing experience, whether youre a gamer, content creator, or power user.</p>
                <h3>Next-Level Speed</h3>
                <p>Unlock blazing-fast data transfer speeds with the HIKSEMI Future SSD. Utilizing PCIe Gen4 technology and NVMe protocol, this SSD achieves read speeds of up to [insert speed] and write speeds of up to [insert speed], ensuring lightning-fast access to your data, applications, and games. Say goodbye to lag and hello to seamless performance.</p>
                <h3>High-Capacity Storage</h3>
                <p>With a generous 1TB storage capacity, the HIKSEMI Future SSD provides ample space to store your operating system, games, multimedia files, and productivity software. Whether youre storing large video projects or vast game libraries, this SSD offers the storage capacity you need to stay organized and productive.</p>
                <h3>Reliable and Durable</h3>
                <p>Engineered for durability and reliability, the HIKSEMI Future SSD features premium NAND flash memory and a robust controller, ensuring long-term performance and data integrity. Built to withstand the demands of daily use, this SSD provides peace of mind knowing your data is safe and secure.</p>
                <h3>Advanced Cooling Design</h3>
                <p>Equipped with an advanced cooling design, the HIKSEMI Future SSD maintains optimal operating temperatures even during heavy workloads. The heatsink and thermal pads efficiently dissipate heat, preventing thermal throttling and ensuring consistent performance under any workload.</p>
                <h3>Enhanced Productivity and Efficiency</h3>
                <p>Boost your productivity and efficiency with the HIKSEMI Future SSD. Whether youre multitasking, editing high-resolution videos, or running demanding applications, this SSD accelerates your workflow and enhances system responsiveness, allowing you to accomplish more in less time.</p>
                <h3>Easy Installation and Compatibility</h3>
                <p>Featuring an M.2 2280 form factor, the HIKSEMI Future SSD is easy to install in compatible desktops, laptops, and ultrabooks. With its plug-and-play functionality and wide compatibility, upgrading your system with this SSD is simple and hassle-free, ensuring a seamless transition to next-generation storage performance.</p>',
            ],
            [
                'ID' => 45,
                'NAME' => 'GOODRAM 2TB 2,5" SATA SSD CX400',
                'PRICE' => 145.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 155.0,
                'DESCRIPTION' => '<h3>GOODRAM 2TB 2.5" SATA SSD CX400: Reliable and High-Capacity Storage Solution</h3>
                    <p>Experience enhanced performance and ample storage capacity with the GOODRAM 2TB 2.5" SATA SSD CX400. Designed to deliver reliable performance and data integrity, this SSD offers a seamless upgrade for your system, whether its a desktop, laptop, or gaming console.</p>
                    <h3>High-Capacity Storage</h3>
                    <p>With a spacious 2TB storage capacity, the GOODRAM CX400 SSD provides plenty of room to store your operating system, applications, games, multimedia files, and more. Enjoy the freedom to store large libraries of media content, software applications, and high-resolution files without worrying about running out of space.</p>
                    <h3>Enhanced Performance</h3>
                    <p>Upgrade your systems performance with the GOODRAM CX400 SSD. Featuring SATA III interface, this SSD delivers impressive read and write speeds, reducing boot times, application loading times, and file transfer durations. Enjoy smoother multitasking and faster data access for improved productivity and efficiency.</p>
                    <h3>Reliable Data Storage</h3>
                    <p>Trust in the reliability and durability of the GOODRAM CX400 SSD. Built with high-quality NAND flash memory and a robust controller, this SSD ensures long-term data integrity and consistent performance. Say goodbye to mechanical hard drives and enjoy the peace of mind knowing your data is safe and secure.</p>
                    <h3>Energy-Efficient Design</h3>
                    <p>The GOODRAM CX400 SSD is designed to operate efficiently, consuming less power than traditional hard drives. With lower power consumption, this SSD helps extend the battery life of laptops and reduces energy costs for desktop systems, making it an environmentally friendly storage solution.</p>
                    <h3>Quiet and Cool Operation</h3>
                    <p>Enjoy quiet and cool operation with the GOODRAM CX400 SSD. Unlike mechanical hard drives, SSDs produce minimal noise and heat during operation, resulting in a quieter and cooler computing experience. Whether youre working, gaming, or streaming media, the CX400 SSD ensures a comfortable and enjoyable user experience.</p>
                    <h3>Easy Installation and Compatibility</h3>
                    <p>Upgrade your system effortlessly with the GOODRAM CX400 SSD. Featuring a standard 2.5" form factor, this SSD is compatible with a wide range of desktops, laptops, and gaming consoles. With its plug-and-play installation and SATA interface, upgrading to the CX400 SSD is simple and hassle-free.</p>
                    <p>Experience the benefits of high-capacity, reliable, and energy-efficient storage with the GOODRAM 2TB 2.5" SATA SSD CX400.</p>',
            ],
            [
                'ID' => 46,
                'NAME' => 'Crucial 4TB 2,5" SATA SSD MX500',
                'PRICE' => 250.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 350.0,
                'DESCRIPTION' => '<h3>Crucial 4TB 2.5" SATA SSD MX500: High-Capacity Storage for Enhanced Performance</h3>
                    <p>Upgrade your system with the Crucial 4TB 2.5" SATA SSD MX500, offering ample storage capacity and exceptional performance. Designed to deliver fast data access, reliable operation, and energy efficiency, the MX500 SSD is an ideal solution for boosting your systems performance and storage capabilities.</p>
                    <h3>Ample Storage Capacity</h3>
                    <p>With a generous 4TB storage capacity, the Crucial MX500 SSD provides plenty of room to store your operating system, applications, games, multimedia files, and more. Enjoy the freedom to store large collections of media content, software applications, and high-resolution files without worrying about running out of space.</p>
                    <h3>Enhanced Performance</h3>
                    <p>Experience faster boot times, application loading, and file transfers with the Crucial MX500 SSD. Featuring SATA III interface and advanced NAND flash memory, this SSD delivers impressive read and write speeds, accelerating system performance and improving overall responsiveness.</p>
                    <h3>Reliable Data Storage</h3>
                    <p>Trust in the reliability and durability of the Crucial MX500 SSD. Built with 3D NAND technology and a robust controller, this SSD ensures long-term data integrity, consistent performance, and resistance to data corruption and loss. Protect your valuable data and enjoy peace of mind knowing your files are safe and secure.</p>
                    <h3>Energy-Efficient Design</h3>
                    <p>The Crucial MX500 SSD is designed to operate efficiently, consuming less power than traditional hard drives. With lower power consumption, this SSD helps extend the battery life of laptops and reduces energy costs for desktop systems, making it an environmentally friendly storage solution.</p>
                    <h3>Quiet and Cool Operation</h3>
                    <p>Enjoy quiet and cool operation with the Crucial MX500 SSD. Unlike mechanical hard drives, SSDs produce minimal noise and heat during operation, resulting in a quieter and cooler computing experience. Whether youre working, gaming, or streaming media, the MX500 SSD ensures a comfortable and enjoyable user experience.</p>
                    <h3>Easy Installation and Compatibility</h3>
                    <p>Upgrade your system effortlessly with the Crucial MX500 SSD. Featuring a standard 2.5" form factor and SATA interface, this SSD is compatible with a wide range of desktops, laptops, and gaming consoles. With its plug-and-play installation, upgrading to the MX500 SSD is simple and hassle-free.</p>
                    <p>Experience the benefits of high-capacity, reliable, and energy-efficient storage with the Crucial 4TB 2.5" SATA SSD MX500.</p>',
            ],
            [
                'ID' => 47,
                'NAME' => 'Toshiba P300 1TB 7200obr. 64MB',
                'PRICE' => 25.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 35.0,
                'DESCRIPTION' => '<h3>Toshiba P300 1TB 7200 RPM 64MB: Reliable and Efficient Hard Drives</h3>
                <p>The Toshiba P300 1TB hard drive is a solid solution for those seeking a reliable data storage with high capacity and performance. With a rotational speed of 7200 RPM and a 64MB buffer, this hard drive provides fast data transfers and smooth operation even during intensive use.</p>
                <h3>High Capacity and Fast Performance</h3>
                <p>With a capacity of 1TB, the Toshiba P300 drive offers ample space for storing multimedia files, games, programs, and other data. Its high rotational speed and large buffer ensure quick access to data and efficient performance for various tasks.</p>',
            ],
            [
                'ID' => 48,
                'NAME' => 'Silver Monkey X Sirocco 3x120 mm PWM KIT',
                'PRICE' => 24.0,
                'QUANTITIES_AVAILABLE' => 13,
                'SALE_ID' => null,
                'OLD_PRICE' => 40.0,
                'DESCRIPTION' => '<h2>Optimal Cooling Solution</h2>
                <p>Introducing the Silver Monkey X Sirocco 3x120 mm PWM Kit, the ultimate cooling solution for your PC. Engineered for maximum performance and efficiency, this kit ensures optimal cooling to keep your system running smoothly even under heavy loads.</p>
                <h2>Powerful PWM Fans</h2>
                <p>The kit includes three high-quality 120 mm PWM fans, designed to deliver powerful airflow while maintaining quiet operation. With PWM (Pulse Width Modulation) control, you can adjust the fan speed according to your systems temperature, ensuring efficient cooling without unnecessary noise.</p>
                <h2>Enhanced Airflow</h2>
                <p>Each fan features aerodynamically optimized blades and a unique Sirocco design, maximizing airflow and minimizing turbulence. This results in improved cooling performance and enhanced heat dissipation, keeping your components cool even during intense gaming sessions or CPU-intensive tasks.</p>
                <h2>Easy Installation</h2>
                <p>The Silver Monkey X Sirocco 3x120 mm PWM Kit is designed for easy installation, making it suitable for both novice users and experienced PC builders. The fans come with standard mounting holes and include all necessary hardware, allowing for hassle-free installation in any compatible case.</p>
                <h2>Versatile Compatibility</h2>
                <p>Compatible with a wide range of PC cases and cooling configurations, the Silver Monkey X Sirocco 3x120 mm PWM Kit offers versatile compatibility to suit your needs. Whether youre building a gaming rig, a workstation, or a home theater PC, this kit provides the cooling performance you need for optimal system stability.</p>
                <h2>RGB Lighting Option</h2>
                <p>For users looking to add a touch of style to their build, the Silver Monkey X Sirocco 3x120 mm PWM Kit is also available with RGB lighting options. Choose from a variety of vibrant colors and effects to customize the look of your PC and create a stunning visual display.</p>
                <h2>Upgrade Your Cooling</h2>
                <p>Upgrade your PCs cooling system with the Silver Monkey X Sirocco 3x120 mm PWM Kit and enjoy improved performance, reliability, and aesthetics. Whether youre overclocking your CPU, gaming for hours on end, or running demanding applications, this kit ensures that your system stays cool and stable under pressure.</p>',
            ],
            [
                'ID' => 49,
                'NAME' => 'Silver Monkey X Oroshi 120 mm PWM ARGB WHT',
                'PRICE' => 10.0,
                'QUANTITIES_AVAILABLE' => 14,
                'SALE_ID' => null,
                'OLD_PRICE' => 15.0,
                'DESCRIPTION' => '<h2>Dynamic Cooling with ARGB Lighting</h2>
                <p>Elevate your PC cooling setup with the Silver Monkey X Oroshi 120 mm PWM ARGB WHT fan. Combining powerful cooling performance with mesmerizing ARGB lighting, this fan is designed to enhance both the aesthetics and functionality of your system.</p>
                <h2>Efficient Cooling Performance</h2>
                <p>The Oroshi 120 mm fan features a high-quality PWM motor that delivers efficient cooling performance while maintaining low noise levels. Whether youre gaming, overclocking, or running demanding applications, this fan ensures optimal airflow to keep your components cool and stable.</p>
                <h2>Customizable ARGB Lighting</h2>
                <p>Add a splash of color to your build with the customizable ARGB lighting of the Oroshi fan. With a wide range of vibrant colors and dynamic lighting effects to choose from, you can create stunning visual displays that match your style and preferences.</p>
                <h2>Quiet Operation</h2>
                <p>Enjoy a quiet computing experience thanks to the advanced PWM control of the Oroshi fan. By dynamically adjusting the fan speed based on temperature, it effectively cools your system while keeping noise to a minimum, even under heavy loads.</p>
                <h2>Easy Installation</h2>
                <p>The Oroshi 120 mm fan is designed for easy installation in any standard case. With its universal 120 mm size and standard mounting holes, it seamlessly integrates into your existing setup without any hassle.</p>
                <h2>Enhance Your Build</h2>
                <p>Upgrade your PC cooling solution with the Silver Monkey X Oroshi 120 mm PWM ARGB WHT fan and experience a perfect balance of performance and aesthetics. Whether youre building a gaming rig, a workstation, or a multimedia PC, this fan adds flair and functionality to any setup.</p>',
            ],
            [
                'ID' => 50,
                'NAME' => 'be quiet! Silent Wings 4 120mm PWM',
                'PRICE' => 15.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => 5,
                'OLD_PRICE' => 35.0,
                'DESCRIPTION' => '<h2>Silent and Efficient Cooling</h2>
                <p>Experience exceptional cooling performance with the be quiet! Silent Wings 4 120mm PWM fan. Engineered for whisper-quiet operation, this fan delivers superior airflow while maintaining near-silent noise levels, making it perfect for high-performance systems.</p>
                <h2>Advanced PWM Control</h2>
                <p>Equipped with advanced PWM control, the Silent Wings 4 fan allows for precise speed adjustments, ensuring optimal cooling performance under varying load conditions. Whether youre gaming, editing, or simply browsing the web, this fan adapts to your systems needs.</p>
                <h2>Unique Fan Blade Design</h2>
                <p>The Silent Wings 4 features a unique fan blade design optimized for maximum airflow and minimal noise generation. Its innovative design reduces turbulence and improves air circulation, resulting in efficient cooling without the distracting noise.</p>
                <h2>Anti-Vibration Mounting</h2>
                <p>Reduce vibrations and noise even further with the be quiet! Silent Wings 4s anti-vibration mounting system. The fan is equipped with rubberized mounting pads that absorb vibrations and minimize noise transmission, ensuring a quiet computing experience.</p>
                <h2>Long-Lasting Reliability</h2>
                <p>Backed by be quiet!s renowned quality and reliability, the Silent Wings 4 fan is built to last. With high-quality components and rigorous testing, this fan delivers reliable performance day in and day out, ensuring your system stays cool and quiet for years to come.</p>
                <h2>Easy Installation</h2>
                <p>Installing the be quiet! Silent Wings 4 fan is quick and hassle-free. With its standard 120mm size and compatible mounting holes, it fits seamlessly into most PC cases and cooling setups, allowing you to upgrade your system with ease.</p>
                <h2>Enhance Your PC Experience</h2>
                <p>Upgrade your PC cooling solution with the be quiet! Silent Wings 4 120mm PWM fan and enjoy silent and efficient cooling performance. Whether youre a gamer, content creator, or power user, this fan delivers the perfect balance of silence, performance, and reliability.</p>',
            ],
            [
                'ID' => 51,
                'NAME' => 'Fractal Design Prisma AL-12 ARGB PWM 120mm',
                'PRICE' => 15.0,
                'QUANTITIES_AVAILABLE' => 13,
                'SALE_ID' => null,
                'OLD_PRICE' => 25.0,
                'DESCRIPTION' => '<h2>Illuminate Your Build with ARGB Lighting</h2>
                <p>Elevate your PCs aesthetics with the Fractal Design Prisma AL-12 ARGB PWM 120mm fan. Featuring addressable RGB (ARGB) lighting, this fan adds vibrant and customizable lighting effects to your build, creating a stunning visual centerpiece.</p>
                <h2>Efficient Cooling Performance</h2>
                <p>Experience powerful cooling performance with the Prisma AL-12 fan. Designed with high-quality components and optimized fan blades, it delivers efficient airflow to effectively dissipate heat from your components, ensuring stable and reliable operation.</p>
                <h2>Advanced PWM Control</h2>
                <p>Enjoy precise control over fan speed and noise levels with the Prisma AL-12s PWM (Pulse Width Modulation) support. Adjust the fan speed dynamically based on your systems temperature requirements, striking the perfect balance between cooling performance and noise levels.</p>
                <h2>Customizable ARGB Effects</h2>
                <p>Express your style and personality with customizable ARGB lighting effects. The Prisma AL-12 fan allows you to choose from a wide range of lighting presets and colors, or sync the lighting with compatible ARGB components and peripherals for a synchronized lighting experience.</p>
                <h2>Low-Noise Operation</h2>
                <p>Experience whisper-quiet operation with the Prisma AL-12 fans advanced PWM control and optimized fan blade design. Enjoy efficient cooling without sacrificing silence, making it ideal for noise-sensitive environments or those who prefer a quieter computing experience.</p>
                <h2>Easy Installation and Compatibility</h2>
                <p>The Prisma AL-12 fan features a standard 120mm form factor and comes with mounting screws for easy installation in most PC cases and cooling configurations. Its compatibility with popular motherboard RGB software allows for seamless integration and control.</p>
                <h2>Enhance Your Build</h2>
                <p>Upgrade your PCs cooling and aesthetics with the Fractal Design Prisma AL-12 ARGB PWM 120mm fan. With its stunning ARGB lighting, efficient cooling performance, and customizable features, its the perfect choice for gamers, enthusiasts, and anyone looking to elevate their PC build.</p>',
            ],
            [
                'ID' => 52,
                'NAME' => 'Fractal Design Aspect 14 RGB Black Frame 140mm',
                'PRICE' => 10.0,
                'QUANTITIES_AVAILABLE' => 14,
                'SALE_ID' => null,
                'OLD_PRICE' => 15.0,
                'DESCRIPTION' => '<h2>Elevate Your Systems Aesthetics with RGB Lighting</h2>
                <p>Add a touch of style and vibrancy to your PC build with the Fractal Design Aspect 14 RGB fan. Featuring a sleek black frame and customizable RGB lighting, this 140mm fan enhances the visual appeal of your system while providing efficient cooling performance.</p>
                <h2>Customizable RGB Lighting Effects</h2>
                <p>Express your creativity and personalize your build with the Aspect 14 RGB fans customizable RGB lighting effects. Choose from a spectrum of colors and dynamic lighting patterns to match your setup or create a unique lighting display that reflects your style.</p>
                <h2>Optimized Cooling Performance</h2>
                <p>Designed for efficient airflow and cooling, the Aspect 14 RGB fan delivers reliable performance to keep your components running smoothly. Its optimized blade design and high-quality bearings ensure effective heat dissipation without compromising on noise levels.</p>
                <h2>Quiet Operation</h2>
                <p>Enjoy a quieter computing experience with the Aspect 14 RGB fans low-noise operation. With advanced motor technology and vibration-dampening features, this fan minimizes noise while maximizing airflow, making it ideal for noise-sensitive environments or those who prefer a quieter PC.</p>
                <h2>Easy Installation and Compatibility</h2>
                <p>The Aspect 14 RGB fan features a standard 140mm size and comes with mounting screws for easy installation in most PC cases and cooling setups. Its compatibility with popular motherboard RGB software allows for seamless integration and control, making customization effortless.</p>
                <h2>Enhance Your Build with Style and Performance</h2>
                <p>Elevate your PC build with the Fractal Design Aspect 14 RGB fan. Combining stylish design with efficient cooling performance and customizable RGB lighting, its the perfect choice for enthusiasts and gamers looking to enhance their system aesthetics while maintaining optimal airflow.</p>',
            ],
            [
                'ID' => 53,
                'NAME' => 'Corsair iCUE LINK QX120 PWM RGB White 120mm',
                'PRICE' => 30.0,
                'QUANTITIES_AVAILABLE' => 15,
                'SALE_ID' => null,
                'OLD_PRICE' => 45.0,
                'DESCRIPTION' => '<h2>Elevate Your PC Aesthetics with Customizable RGB Lighting</h2>
                <p>Transform the look of your PC with the Corsair iCUE LINK QX120 PWM RGB fan. Featuring a sleek white design and customizable RGB lighting, this 120mm fan adds vibrant illumination to your system while delivering powerful cooling performance.</p>
                <h2>Customizable RGB Lighting Effects</h2>
                <p>Express your creativity and personalize your build with the iCUE LINK QX120 PWM RGB fans customizable RGB lighting effects. Choose from a wide range of colors and dynamic lighting patterns using Corsairs iCUE software to match your setup or create stunning visual effects that reflect your style.</p>
                <h2>Efficient Cooling Performance</h2>
                <p>Designed for optimal airflow and cooling efficiency, the iCUE LINK QX120 PWM RGB fan ensures reliable performance to keep your components running cool under heavy loads. Its high-quality fan blades and advanced motor technology deliver exceptional airflow while minimizing noise levels, making it suitable for both gaming and demanding workloads.</p>
                <h2>Integrated Corsair iCUE Software</h2>
                <p>Take full control of your RGB lighting and fan speed settings with Corsairs iCUE software. Customize lighting effects, adjust fan speeds, and synchronize your fan lighting with other compatible Corsair RGB products for a cohesive and immersive lighting experience across your entire system.</p>
                <h2>Quiet Operation</h2>
                <p>Enjoy a quieter computing experience with the iCUE LINK QX120 PWM RGB fans low-noise operation. Designed with noise-reducing features and optimized fan blade design, it maintains quiet performance even at high speeds, allowing you to focus on your tasks without distraction.</p>
                <h2>Easy Installation and Compatibility</h2>
                <p>The iCUE LINK QX120 PWM RGB fan features a standard 120mm size and comes with mounting screws for easy installation in most PC cases and cooling setups. Its compatibility with Corsairs iCUE ecosystem ensures seamless integration and control, making it effortless to customize your lighting and fan settings.</p>
                <h2>Enhance Your PC Build with Style and Performance</h2>
                <p>Upgrade your PC build with the Corsair iCUE LINK QX120 PWM RGB fan. Combining stylish design with customizable RGB lighting and efficient cooling performance, its the perfect choice for enthusiasts and gamers who want to elevate their system aesthetics while maintaining optimal airflow and temperature control.</p>',
            ],
            [
                'ID' => 54,
                'NAME' => 'Corsair LL120 RGB LED Static PWM Triple Pack 3x120mm',
                'PRICE' => 130.0,
                'QUANTITIES_AVAILABLE' => 13,
                'SALE_ID' => null,
                'OLD_PRICE' => 145.0,
                'DESCRIPTION' => '<h2>Elevate Your PC Aesthetics with Vibrant RGB Lighting</h2>
                <p>Upgrade your PCs visual appeal with the Corsair LL120 RGB LED Static PWM Triple Pack. Featuring three 120mm fans with customizable RGB lighting, this pack adds vibrant colors and dynamic effects to your system, enhancing its overall look and feel.</p>
                <h2>Customizable RGB Lighting Effects</h2>
                <p>Express your creativity and personalize your PCs lighting with the LL120 RGB LED fans. Choose from a wide range of colors and dynamic lighting effects using Corsairs iCUE software, allowing you to match your setups theme or create eye-catching visual displays.</p>
                <h2>Efficient Cooling Performance</h2>
                <p>Besides delivering stunning RGB lighting, the LL120 RGB LED fans provide excellent cooling performance to keep your system running smoothly. With optimized fan blades and PWM control, they offer efficient airflow while maintaining low noise levels, ensuring effective cooling without sacrificing silence.</p>
                <h2>Dynamic Lighting Synchronization</h2>
                <p>Synchronize the RGB lighting of your LL120 fans with other compatible Corsair RGB products using Corsairs iCUE software. Create immersive lighting effects that flow seamlessly across your entire setup, enhancing the visual impact of your gaming or workstation environment.</p>
                <h2>Quiet Operation</h2>
                <p>Enjoy a quieter computing experience with the LL120 RGB LED fans low-noise operation. Designed with noise-reducing features and advanced motor technology, they deliver impressive cooling performance while minimizing noise, allowing you to focus on your tasks without distraction.</p>
                <h2>Easy Installation and Compatibility</h2>
                <p>The LL120 RGB LED fans come in a triple pack with mounting screws included for easy installation in most PC cases and cooling configurations. Their standard 120mm size ensures compatibility with a wide range of setups, while their integration with Corsairs iCUE ecosystem makes customization and control effortless.</p>
                <h2>Elevate Your PC Build with Stunning RGB Lighting</h2>
                <p>Upgrade your PC build with the Corsair LL120 RGB LED Static PWM Triple Pack. With customizable RGB lighting, efficient cooling performance, and quiet operation, these fans are the perfect choice for enthusiasts and gamers who want to take their system aesthetics to the next level.</p>',
            ],
            [
                'ID' => 55,
                'NAME' => 'Corsair iCUE QL120 RGB PWM Triple Pack+Lighting Node 3x120',
                'PRICE' => 150.0,
                'QUANTITIES_AVAILABLE' => 17,
                'SALE_ID' => null,
                'OLD_PRICE' => 155.0,
                'DESCRIPTION' => '<h2>Elevate Your PC Aesthetics with Stunning RGB Lighting</h2>
                <p>Enhance the visual appeal of your PC build with the Corsair iCUE QL120 RGB PWM Triple Pack. Featuring three 120mm fans equipped with vibrant RGB lighting and a Lighting Node CORE controller, this pack offers a captivating lighting experience that brings your system to life.</p>
                <h2>Immersive RGB Lighting Effects</h2>
                <p>Express your creativity and personalize your PCs lighting with the QL120 RGB PWM fans. With 34 individually addressable RGB LEDs per fan, you can create mesmerizing lighting effects and dynamic color patterns using Corsairs powerful iCUE software. Choose from a wide range of colors and effects to match your setups theme or create stunning visual displays.</p>
                <h2>Efficient Cooling Performance</h2>
                <p>Besides delivering striking RGB lighting, the QL120 RGB PWM fans provide excellent cooling performance to keep your system running optimally. Featuring a specially designed fan blade and PWM control, they offer efficient airflow while maintaining low noise levels, ensuring effective cooling without compromising on silence.</p>
                <h2>Integrated Lighting Node CORE Controller</h2>
                <p>The included Lighting Node CORE controller allows seamless synchronization of your QL120 RGB PWM fans lighting effects. Connect the fans to the controller and customize their lighting using Corsairs iCUE software, enabling dynamic lighting synchronization across your entire setup for a cohesive and immersive experience.</p>
                <h2>Quiet Operation</h2>
                <p>Enjoy a quieter computing experience with the QL120 RGB PWM fans low-noise operation. Designed with noise-reducing features and advanced motor technology, they deliver impressive cooling performance while minimizing noise, allowing you to focus on your tasks without distraction.</p>
                <h2>Easy Installation and Compatibility</h2>
                <p>The QL120 RGB PWM fans come in a triple pack with mounting screws included for easy installation in most PC cases and cooling configurations. Their standard 120mm size ensures compatibility with a wide range of setups, while their integration with Corsairs iCUE ecosystem makes customization and control effortless.</p>
                <h2>Elevate Your PC Build with Mesmerizing RGB Lighting</h2>
                <p>Transform your PC build with the Corsair iCUE QL120 RGB PWM Triple Pack+Lighting Node. Featuring captivating RGB lighting, efficient cooling performance, and quiet operation, these fans are the perfect choice for enthusiasts and gamers who demand both style and substance in their systems.</p>',
            ],
            [
                'ID' => 56,
                'NAME' => 'Corsair LL120 RGB White Triple Pack+Node PRO 3x120mm',
                'PRICE' => 125.0,
                'QUANTITIES_AVAILABLE' => 13,
                'SALE_ID' => null,
                'OLD_PRICE' => 135.0,
                'DESCRIPTION' => '<h2>Elevate Your PC Aesthetics with Brilliant RGB Lighting</h2>
                <p>Upgrade your PCs visual appeal with the Corsair LL120 RGB White Triple Pack. Featuring three 120mm fans with stunning RGB lighting and a Node PRO controller, this pack offers an immersive lighting experience that transforms your system into a visual masterpiece.</p>
                <h2>Immersive RGB Lighting Effects</h2>
                <p>Express your creativity and customize your PCs lighting with the LL120 RGB White fans. Equipped with 16 individually addressable RGB LEDs per fan, you can create captivating lighting effects and dynamic color patterns using Corsairs powerful iCUE software. Choose from a wide range of colors and effects to match your setups theme or create mesmerizing visual displays.</p>
                <h2>Efficient Cooling Performance</h2>
                <p>Besides delivering stunning RGB lighting, the LL120 RGB White fans provide excellent cooling performance to keep your system running smoothly. Featuring specially designed fan blades and PWM control, they offer efficient airflow while maintaining low noise levels, ensuring effective cooling without compromising on silence.</p>
                <h2>Integrated Node PRO Controller</h2>
                <p>The included Node PRO controller enables seamless synchronization of your LL120 RGB White fans lighting effects. Connect the fans to the controller and customize their lighting using Corsairs iCUE software, allowing for dynamic lighting synchronization across your entire setup for a cohesive and immersive experience.</p>
                <h2>Quiet Operation</h2>
                <p>Enjoy a quieter computing experience with the LL120 RGB White fans low-noise operation. Designed with noise-reducing features and advanced motor technology, they deliver impressive cooling performance while minimizing noise, allowing you to focus on your tasks without distraction.</p>
                <h2>Easy Installation and Compatibility</h2>
                <p>The LL120 RGB White fans come in a triple pack with mounting screws included for easy installation in most PC cases and cooling configurations. Their standard 120mm size ensures compatibility with a wide range of setups, while their integration with Corsairs iCUE ecosystem makes customization and control effortless.</p>
                <h2>Elevate Your PC Build with Brilliant RGB Lighting</h2>
                <p>Transform your PC build with the Corsair LL120 RGB White Triple Pack+Node PRO. Featuring stunning RGB lighting, efficient cooling performance, and quiet operation, these fans are the perfect choice for enthusiasts and gamers who demand both style and substance in their systems.</p>',
            ],
            [
                'ID' => 57,
                'NAME' => 'Gigabyte GeForce RTX 4060 Eagle OC 8GB GDDR6',
                'PRICE' => 350.0,
                'QUANTITIES_AVAILABLE' => 9,
                'SALE_ID' => null,
                'OLD_PRICE' => 445.0,
                'DESCRIPTION' => '<h2>Immersive Gaming Performance with Gigabyte</h2>
                <p>Elevate your gaming experience with the Gigabyte GeForce RTX 4060 Eagle OC graphics card. Powered by NVIDIAs Ampere architecture and featuring 8GB of GDDR6 memory, this GPU delivers exceptional performance, stunning visuals, and advanced gaming features for immersive gameplay.</p>
                <h2>Powerful Ampere Architecture</h2>
                <p>Experience the power of NVIDIAs Ampere architecture, which provides a significant leap in performance and efficiency compared to previous generations. With enhanced CUDA cores, RT cores for ray tracing, and Tensor cores for AI acceleration, the RTX 4060 Eagle OC delivers unparalleled gaming performance and realism.</p>
                <h2>High-Speed GDDR6 Memory</h2>
                <p>Equipped with 8GB of GDDR6 memory, the RTX 4060 Eagle OC ensures smooth and responsive gameplay, even at high resolutions and detail settings. The high-speed memory bandwidth allows for faster data transfer, reducing latency and ensuring a seamless gaming experience.</p>
                <h2>Boosted Clock Speeds for Enhanced Performance</h2>
                <p>The Eagle OC variant of the RTX 4060 comes with factory overclocked settings, providing higher boost clock speeds out of the box for increased performance in demanding games and applications. Enjoy faster frame rates and smoother gameplay without compromising stability.</p>
                <h2>Advanced Cooling for Optimal Performance</h2>
                <p>Gigabytes WindForce 3X cooling system features triple fans with alternate spinning, direct-touch copper heat pipes, and a unique blade design to efficiently dissipate heat and keep the GPU cool under heavy load. This ensures stable performance and extends the lifespan of the graphics card.</p>
                <h2>RGB Fusion 2.0 Lighting</h2>
                <p>Customize the look of your gaming rig with Gigabytes RGB Fusion 2.0 lighting system. The RTX 4060 Eagle OC features customizable RGB lighting on the shroud, allowing you to synchronize colors and effects with other RGB components for a cohesive and visually stunning setup.</p>
                <h2>Comprehensive Connectivity Options</h2>
                <p>The RTX 4060 Eagle OC offers a range of connectivity options, including multiple DisplayPort 1.4a and HDMI 2.1 ports, allowing you to connect up to four displays for immersive gaming and multitasking. The card also features PCIe 4.0 support for high-speed data transfer.</p>
                <h2>Software Suite for Performance Optimization</h2>
                <p>Gigabytes Aorus Engine software allows you to monitor and tweak various settings of your RTX 4060 Eagle OC graphics card, including clock speeds, fan profiles, and RGB lighting effects. Maximize performance and customize your gaming experience with intuitive software control.</p>
                <h2>Experience Next-Generation Gaming</h2>
                <p>With its powerful performance, advanced features, and sleek design, the Gigabyte GeForce RTX 4060 Eagle OC 8GB GDDR6 graphics card is the perfect choice for gamers and enthusiasts looking to take their gaming experience to the next level. Immerse yourself in stunning visuals and seamless gameplay with Gigabytes latest GPU offering.</p>',
            ],
            [
                'ID' => 58,
                'NAME' => 'MSI GeForce RTX 4060 Ti Gaming X SLIM 16GB GDDR6',
                'PRICE' => 400.0,
                'QUANTITIES_AVAILABLE' => 9,
                'SALE_ID' => null,
                'OLD_PRICE' => 455.0,
                'DESCRIPTION' => '<h2>Elevate Your Gaming Experience with MSI</h2>
                <p>Experience unparalleled gaming performance with the MSI GeForce RTX 4060 Ti Gaming X SLIM graphics card. Built on NVIDIAs Ampere architecture and featuring 16GB of GDDR6 memory, this GPU delivers exceptional power and efficiency for immersive gaming experiences.</p>
                <h2>Advanced Ampere Architecture</h2>
                <p>Powered by NVIDIAs Ampere architecture, the RTX 4060 Ti Gaming X SLIM delivers incredible gaming performance and realistic graphics. With dedicated RT cores for ray tracing and Tensor cores for AI acceleration, youll experience lifelike visuals and smooth gameplay in the latest titles.</p>
                <h2>High-Speed GDDR6 Memory</h2>
                <p>Equipped with 16GB of high-speed GDDR6 memory, the RTX 4060 Ti Gaming X SLIM ensures lightning-fast data transfer and responsive gaming performance. Enjoy smooth frame rates and quick load times, even at high resolutions and detail settings.</p>
                <h2>Boost Clock Technology for Enhanced Performance</h2>
                <p>Featuring MSIs exclusive Boost Clock technology, the RTX 4060 Ti Gaming X SLIM delivers higher clock speeds for increased performance in demanding games and applications. Unlock the full potential of your GPU and enjoy smoother gaming experiences.</p>
                <h2>Efficient Cooling Design</h2>
                <p>The Gaming X SLIM variant of the RTX 4060 Ti features MSIs advanced cooling solution, ensuring optimal thermal performance even under heavy load. The TORX FAN 4.0 technology combines dispersion fan blades and traditional fan blades to generate concentrated airflow and enhance cooling efficiency.</p>
                <h2>RGB Mystic Light Integration</h2>
                <p>Customize the look of your gaming rig with MSIs RGB Mystic Light technology. The RTX 4060 Ti Gaming X SLIM features customizable RGB lighting on the shroud, allowing you to personalize your setup with vibrant colors and dynamic effects that synchronize with other Mystic Light-compatible components.</p>
                <h2>Zero Frozr Technology for Silent Operation</h2>
                <p>MSIs Zero Frozr technology ensures silent operation during low-load sPRICErios by stopping the fans when temperatures are below a certain threshold. This allows for quieter gaming sessions and reduces unnecessary noise in your gaming environment.</p>
                <h2>Comprehensive Connectivity Options</h2>
                <p>The RTX 4060 Ti Gaming X SLIM offers a variety of connectivity options, including multiple DisplayPort 1.4a and HDMI 2.1 ports, enabling seamless connectivity with the latest display technologies. Connect multiple monitors for immersive gaming experiences or productivity multitasking.</p>
                <h2>MSI Dragon Center Software</h2>
                <p>Take control of your gaming experience with the MSI Dragon Center software. Monitor your GPUs performance, adjust fan speeds, customize RGB lighting effects, and optimize game settings all from one intuitive interface. Maximize your gaming potential with MSIs powerful software suite.</p>
                <h2>Immersive Gaming Performance</h2>
                <p>With its powerful performance, innovative features, and sleek design, the MSI GeForce RTX 4060 Ti Gaming X SLIM 16GB GDDR6 graphics card delivers unmatched gaming experiences. Elevate your gameplay to new heights and immerse yourself in the latest AAA titles with MSIs cutting-edge GPU technology.</p>',
            ],
            [
                'ID' => 59,
                'NAME' => 'Gigabyte GeForce RTX 3060 GAMING OC LHR 12GB GDDR6',
                'PRICE' => 300.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 335.0,
                'DESCRIPTION' => '<h2>Elevate Your Gaming Experience with Gigabyte</h2>
                <p>Experience exceptional gaming performance and lifelike graphics with the Gigabyte GeForce RTX 3060 GAMING OC LHR graphics card. Featuring 12GB of GDDR6 memory and advanced cooling technology, this GPU is designed to deliver smooth gameplay and immersive visuals for todays most demanding titles.</p>
                <h2>Powered by NVIDIA Ampere Architecture</h2>
                <p>Powered by NVIDIAs Ampere architecture, the RTX 3060 GAMING OC LHR delivers incredible gaming performance and realism. With dedicated RT cores for ray tracing and Tensor cores for AI processing, you can enjoy realistic lighting, shadows, and reflections in your favorite games.</p>
                <h2>12GB GDDR6 Memory</h2>
                <p>Equipped with 12GB of high-speed GDDR6 memory, the RTX 3060 GAMING OC LHR ensures smooth performance and responsiveness, even in the most demanding gaming sPRICErios. Experience faster load times, smoother frame rates, and seamless gameplay with ample memory capacity.</p>
                <h2>Advanced Cooling Technology</h2>
                <p>The GAMING OC variant of the RTX 3060 features Gigabytes advanced cooling solution, designed to keep temperatures in check during intense gaming sessions. The WindForce 3X cooling system combines three unique blade fans with alternate spinning to maximize airflow and heat dissipation.</p>
                <h2>RGB Fusion 2.0</h2>
                <p>Customize the look of your gaming rig with Gigabytes RGB Fusion 2.0 lighting technology. The RTX 3060 GAMING OC LHR features customizable RGB lighting on the shroud, allowing you to personalize your setup with vibrant colors and dynamic effects that synchronize with other RGB Fusion-compatible components.</p>
                <h2>Efficient Power Delivery</h2>
                <p>The RTX 3060 GAMING OC LHR features an efficient power delivery system, ensuring stable and reliable performance under heavy load. With Gigabytes Ultra Durable components and enhanced circuit design, this GPU delivers consistent power delivery for optimal gaming performance.</p>
                <h2>Multiple Display Connectivity</h2>
                <p>Connectivity options on the RTX 3060 GAMING OC LHR include multiple DisplayPort 1.4a and HDMI 2.1 ports, allowing for seamless connectivity with the latest display technologies. Enjoy high-resolution gaming on multiple monitors or immersive VR experiences with ease.</p>
                <h2>Intuitive AORUS Engine Software</h2>
                <p>Take control of your gaming experience with the Gigabyte AORUS Engine software. Monitor your GPUs performance, adjust fan speeds, customize RGB lighting effects, and optimize game settings all from one intuitive interface. Maximize your gaming potential with Gigabytes powerful software suite.</p>
                <h2>Immersive Gaming Performance</h2>
                <p>With its powerful performance, innovative features, and sleek design, the Gigabyte GeForce RTX 3060 GAMING OC LHR 12GB GDDR6 graphics card delivers unmatched gaming experiences. Elevate your gameplay to new heights and immerse yourself in the latest AAA titles with Gigabytes cutting-edge GPU technology.</p>',
            ],
            [
                'ID' => 60,
                'NAME' => 'Gigabyte Radeon RX 6600 EAGLE 8GB GDDR6',
                'PRICE' => 200.0,
                'QUANTITIES_AVAILABLE' => 9,
                'SALE_ID' => null,
                'OLD_PRICE' => 235.0,
                'DESCRIPTION' => '<h2>Unleash Your Gaming Potential with Gigabyte</h2>
                <p>Experience high-performance gaming with the Gigabyte Radeon RX 6600 EAGLE 8GB GDDR6 graphics card. Designed to deliver exceptional visuals and smooth gameplay, this GPU is perfect for both casual gamers and esports enthusiasts.</p>
                <h2>Powerful Graphics Performance</h2>
                <p>The Radeon RX 6600 EAGLE is equipped with 8GB of GDDR6 memory and features AMDs RDNA 2 architecture, delivering stunning graphics and responsive gameplay. With support for the latest DirectX 12 Ultimate features, you can enjoy lifelike visuals and immersive gaming experiences.</p>
                <h2>Advanced Cooling Technology</h2>
                <p>Featuring Gigabytes WINDFORCE 3X cooling system, the RX 6600 EAGLE ensures optimal thermal performance even during intense gaming sessions. The triple-fan design and direct-touch heat pipes help dissipate heat efficiently, keeping temperatures low and performance high.</p>
                <h2>Efficient Power Delivery</h2>
                <p>With its advanced power delivery system, the RX 6600 EAGLE delivers reliable performance while minimizing power consumption. Gigabytes Ultra Durable components ensure stability and longevity, allowing you to game with confidence for hours on end.</p>
                <h2>Customizable RGB Lighting</h2>
                <p>Enhance your gaming setup with customizable RGB lighting on the RX 6600 EAGLE. With Gigabytes RGB Fusion 2.0 technology, you can personalize the lighting effects to match your style or synchronize them with other RGB-enabled components for a cohesive look.</p>
                <h2>Intuitive Software Controls</h2>
                <p>Take control of your gaming experience with Gigabytes intuitive software suite. The Radeon RX 6600 EAGLE is compatible with the AORUS Engine software, allowing you to monitor performance metrics, adjust fan speeds, and customize RGB lighting with ease.</p>
                <h2>Multiple Display Connectivity</h2>
                <p>Connectivity options on the RX 6600 EAGLE include multiple DisplayPort 1.4 and HDMI 2.1 ports, allowing you to easily connect to a variety of monitors and display devices. Whether youre gaming on a high-refresh-rate monitor or enjoying immersive VR experiences, the RX 6600 EAGLE has you covered.</p>
                <h2>Immersive Gaming Experience</h2>
                <p>Whether youre exploring vast open worlds or competing in fast-paced multiplayer battles, the Gigabyte Radeon RX 6600 EAGLE 8GB GDDR6 graphics card delivers the performance and reliability you need to dominate the competition. Elevate your gaming experience with Gigabytes cutting-edge GPU technology.</p>',
            ],
            [
                'ID' => 61,
                'NAME' => 'MSI GeForce RTX 4060 Ti Ventus 2X Black OC 16GB GDDR6',
                'PRICE' => 325.0,
                'QUANTITIES_AVAILABLE' => 9,
                'SALE_ID' => null,
                'OLD_PRICE' => 335.0,
                'DESCRIPTION' => '<h2>Elevate Your Gaming Experience with MSI</h2>
            <p>Experience the pinnacle of gaming performance with the MSI GeForce RTX 4060 Ti Ventus 2X Black OC graphics card. Built on NVIDIAs Ampere architecture and equipped with 16GB of GDDR6 memory, this GPU delivers unparalleled gaming power and immersion for both casual and hardcore gamers alike.</p>
            <h2>Powerful Graphics Processing</h2>
            <p>The GeForce RTX 4060 Ti Ventus 2X Black OC features NVIDIAs latest Ampere architecture, offering a significant boost in gaming performance and ray tracing capabilities. With 16GB of GDDR6 memory, you can enjoy smooth gameplay and stunning visuals in the latest AAA titles.</p>
            <h2>Efficient Cooling Design</h2>
            <p>Equipped with MSIs award-winning Ventus 2X cooling solution, this graphics card ensures optimal thermal performance even under heavy load. The dual-fan design and advanced heatsink keep temperatures low, allowing you to push your GPU to its limits without compromising performance.</p>
            <h2>Overclocking Capabilities</h2>
            <p>With MSIs exclusive Afterburner software, you can easily overclock your RTX 4060 Ti Ventus 2X Black OC for even greater gaming performance. Unlock the full potential of your GPU and experience smoother gameplay and faster frame rates in your favorite games.</p>
            <h2>Immersive Ray Tracing</h2>
            <p>Thanks to its dedicated ray tracing cores, the RTX 4060 Ti Ventus 2X Black OC delivers stunning visuals and lifelike lighting effects in supported games. Experience realistic reflections, shadows, and ambient occlusion for a truly immersive gaming experience.</p>
            <h2>Advanced Connectivity</h2>
            <p>Connectivity options on the RTX 4060 Ti Ventus 2X Black OC include DisplayPort 1.4a and HDMI 2.1 ports, allowing you to easily connect to high-resolution monitors and VR headsets. Enjoy smooth, tear-free gaming at high refresh rates and resolutions up to 4K.</p>
            <h2>RGB Lighting Effects</h2>
            <p>Add a touch of style to your gaming rig with customizable RGB lighting on the RTX 4060 Ti Ventus 2X Black OC. With MSIs Mystic Light software, you can personalize the lighting effects to match your setup and create a visually stunning gaming environment.</p>
            <h2>Enhanced Durability</h2>
            <p>MSIs Military Class components ensure long-term reliability and stability, even under demanding gaming conditions. With a solid build quality and rigorous testing procedures, you can trust the RTX 4060 Ti Ventus 2X Black OC to deliver consistent performance for years to come.</p>
            <h2>Experience Gaming at Its Best</h2>
            <p>Whether youre exploring vast open worlds, competing in esports tournaments, or diving into virtual reality experiences, the MSI GeForce RTX 4060 Ti Ventus 2X Black OC 16GB GDDR6 graphics card delivers the performance and reliability you need to dominate the competition. Elevate your gaming experience with MSIs industry-leading GPU technology.</p>',
            ],
            [
                'ID' => 62,
                'NAME' => 'Gigabyte GeForce RTX 4070 SUPER WINDFORCE OC 12GB GDDR6X',
                'PRICE' => 625.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 635.0,
                'DESCRIPTION' => '<h2>Unleash Gaming Performance with Gigabyte</h2>
                <p>Experience unparalleled gaming performance with the Gigabyte GeForce RTX 4070 SUPER WINDFORCE OC graphics card. Engineered for maximum power and efficiency, this GPU is equipped with 12GB of GDDR6X memory and features Gigabytes renowned WINDFORCE cooling solution for superior thermal performance.</p>
                <h2>Next-Gen Graphics Processing</h2>
                <p>The GeForce RTX 4070 SUPER WINDFORCE OC is powered by NVIDIAs cutting-edge Ampere architecture, delivering incredible gaming performance and advanced ray tracing capabilities. With 12GB of ultra-fast GDDR6X memory, you can enjoy smooth gameplay and stunning visuals in the latest AAA titles.</p>
                <h2>Efficient Cooling Design</h2>
                <p>Equipped with Gigabytes WINDFORCE cooling system, this graphics card ensures optimal thermal performance under heavy gaming loads. The triple-fan design and large heatsink effectively dissipate heat, allowing you to push your GPU to its limits without worrying about overheating.</p>
                <h2>Overclocking Ready</h2>
                <p>Unlock the full potential of your GPU with Gigabytes intuitive AORUS Engine software. Easily overclock your RTX 4070 SUPER WINDFORCE OC for even greater gaming performance and enjoy faster frame rates and smoother gameplay in your favorite games.</p>
                <h2>Immersive Ray Tracing</h2>
                <p>Experience lifelike graphics and stunning visual effects with real-time ray tracing technology. The RTX 4070 SUPER WINDFORCE OC features dedicated ray tracing cores for realistic reflections, shadows, and lighting effects, bringing your games to life like never before.</p>
                <h2>Advanced Connectivity</h2>
                <p>Connectivity options on the RTX 4070 SUPER WINDFORCE OC include DisplayPort 1.4a and HDMI 2.1 ports, allowing you to easily connect to high-resolution monitors and VR headsets. Enjoy smooth, tear-free gaming at high refresh rates and resolutions up to 8K.</p>
                <h2>RGB Fusion 2.0</h2>
                <p>Customize your gaming rig with Gigabytes RGB Fusion 2.0 software. Choose from a variety of lighting effects and colors to match your setup and create a unique gaming aesthetic. Sync your RGB lighting with other compatible Gigabyte components for a cohesive look.</p>
                <h2>Enhanced Durability</h2>
                <p>Gigabytes Ultra Durable components ensure long-term reliability and stability, even under extreme gaming conditions. With a robust build quality and rigorous testing procedures, you can trust the RTX 4070 SUPER WINDFORCE OC to deliver consistent performance for years to come.</p>
                <h2>Elevate Your Gaming Experience</h2>
                <p>Whether youre exploring vast open worlds, competing in esports tournaments, or diving into virtual reality experiences, the Gigabyte GeForce RTX 4070 SUPER WINDFORCE OC 12GB GDDR6X graphics card delivers the performance and reliability you need to dominate the competition. Experience gaming at its best with Gigabytes industry-leading GPU technology.</p>',
            ],
            [
                'ID' => 63,
                'NAME' => 'MSI GeForce RTX 4070 Ti SUPER VENTUS 2X OC 16GB GDDR6X',
                'PRICE' => 725.0,
                'QUANTITIES_AVAILABLE' => 9,
                'SALE_ID' => null,
                'OLD_PRICE' => 735.0,
                'DESCRIPTION' => '<h2>Unleash Next-Generation Gaming</h2>
                <p>Experience the ultimate in gaming performance with the MSI GeForce RTX 4070 Ti SUPER VENTUS 2X OC graphics card. Powered by NVIDIAs Ampere architecture and featuring 16GB of GDDR6X memory, this GPU delivers unrivaled graphics performance for the most demanding games and applications.</p>
                <h2>Advanced Cooling Technology</h2>
                <p>The RTX 4070 Ti SUPER VENTUS 2X OC is equipped with MSIs TORX Fan 4.0 cooling system, featuring two high-performance fans with advanced aerodynamics. Combined with a large heatsink and heat pipes, this cooling solution ensures efficient heat dissipation and keeps your GPU running cool even under heavy loads.</p>
                <h2>Boosted Performance</h2>
                <p>With factory overclocked speeds and MSIs exclusive Afterburner overclocking utility, you can push your RTX 4070 Ti SUPER VENTUS 2X OC even further for increased performance. Unlock higher frame rates and smoother gameplay in your favorite titles, and enjoy an immersive gaming experience like never before.</p>
                <h2>Real-Time Ray Tracing</h2>
                <p>Experience lifelike graphics and stunning visual effects with real-time ray tracing technology. The RTX 4070 Ti SUPER VENTUS 2X OC features dedicated ray tracing cores for ultra-realistic lighting, reflections, and shadows, bringing your games to life with cinematic detail.</p>
                <h2>AI-Powered DLSS</h2>
                <p>Take advantage of NVIDIAs AI-powered Deep Learning Super Sampling (DLSS) technology to enhance image quality and boost performance in supported games. Enjoy higher frame rates and smoother gameplay without compromising on image quality, giving you the competitive edge in fast-paced multiplayer titles.</p>
                <h2>Immersive 4K Gaming</h2>
                <p>With 16GB of ultra-fast GDDR6X memory and support for high-resolution displays, the RTX 4070 Ti SUPER VENTUS 2X OC is perfect for immersive 4K gaming experiences. Enjoy stunning visuals, rich textures, and smooth gameplay at the highest resolutions, and see every detail come to life on your screen.</p>
                <h2>Enhanced Connectivity</h2>
                <p>The RTX 4070 Ti SUPER VENTUS 2X OC features a range of connectivity options, including DisplayPort 1.4a and HDMI 2.1 ports, allowing you to connect to the latest high-resolution displays and VR headsets. Enjoy tear-free gaming and smooth, responsive gameplay at high refresh rates.</p>
                <h2>Dynamic RGB Lighting</h2>
                <p>Customize your gaming rig with MSIs Mystic Light RGB lighting technology. Choose from a variety of lighting effects and colors to match your setup, and synchronize your RGB lighting with other compatible components for a cohesive look. Make your PC stand out from the crowd with vibrant, customizable RGB lighting.</p>
                <h2>Powerful and Reliable</h2>
                <p>Backed by MSIs reputation for quality and reliability, the RTX 4070 Ti SUPER VENTUS 2X OC is built to last. With premium components and rigorous testing procedures, you can trust this graphics card to deliver exceptional performance and stability, whether youre gaming, streaming, or creating content.</p>
                <h2>Elevate Your Gaming Experience</h2>
                <p>With its powerful performance, advanced cooling technology, and immersive features, the MSI GeForce RTX 4070 Ti SUPER VENTUS 2X OC 16GB GDDR6X graphics card is the perfect choice for gamers who demand the best. Experience the next generation of gaming with MSI.</p>',
            ],
            [
                'ID' => 64,
                'NAME' => 'Gainward GeForce RTX 4080 Super Panther OC 16GB GDDR6X',
                'PRICE' => 1025.0,
                'QUANTITIES_AVAILABLE' => 9,
                'SALE_ID' => null,
                'OLD_PRICE' => 1035.0,
                'DESCRIPTION' => '<h2>Elevate Your Gaming Experience</h2>
                <p>Experience unparalleled gaming performance with the Gainward GeForce RTX 4080 Super Panther OC graphics card. Designed for enthusiasts and gamers who demand the ultimate in graphics performance, this GPU is equipped with 16GB of GDDR6X memory and advanced features to deliver smooth, immersive gaming experiences.</p>
                <h2>Powerful Performance</h2>
                <p>The RTX 4080 Super Panther OC features NVIDIAs Ampere architecture, delivering massive performance gains over previous generations. With a boost clock speed of XX MHz and XX CUDA cores, this graphics card is capable of handling the most demanding games and applications with ease.</p>
                <h2>Advanced Cooling Design</h2>
                <p>Stay cool under pressure with Gainwards custom cooling solution. The Super Panther OC features a triple-fan cooler with large heatsinks and heat pipes to keep temperatures in check during intense gaming sessions. With optimized fan curves and intelligent thermal management, you can push your GPU to the limit without worrying about overheating.</p>
                <h2>Factory Overclocked for Maximum Performance</h2>
                <p>Unlock extra performance right out of the box with Gainwards factory overclocked settings. The Super Panther OC features a boost clock speed of XX MHz, providing a significant performance boost compared to reference models. Experience higher frame rates, smoother gameplay, and faster rendering times in your favorite games and applications.</p>
                <h2>Real-Time Ray Tracing and DLSS</h2>
                <p>Experience lifelike graphics and stunning visual effects with real-time ray tracing technology. The RTX 4080 Super Panther OC features dedicated ray tracing cores for ultra-realistic lighting, reflections, and shadows, bringing your games to life with cinematic detail. With AI-powered Deep Learning Super Sampling (DLSS), you can enjoy higher frame rates and smoother gameplay without sacrificing image quality.</p>
                <h2>Immersive 4K Gaming</h2>
                <p>With 16GB of ultra-fast GDDR6X memory and support for high-resolution displays, the RTX 4080 Super Panther OC is perfect for immersive 4K gaming experiences. Enjoy stunning visuals, rich textures, and smooth gameplay at the highest resolutions, and see every detail come to life on your screen.</p>
                <h2>Customizable RGB Lighting</h2>
                <p>Personalize your gaming rig with Gainwards customizable RGB lighting. The Super Panther OC features RGB lighting on the fans and backplate, allowing you to customize the look of your graphics card to match your setup. Choose from a variety of lighting effects and colors to create your own unique gaming aesthetic.</p>
                <h2>Advanced Connectivity</h2>
                <p>The RTX 4080 Super Panther OC offers a range of connectivity options, including HDMI 2.1 and DisplayPort 1.4a, allowing you to connect to the latest high-resolution displays and VR headsets. With support for NVIDIA G-SYNC technology, you can enjoy tear-free gaming and smooth, responsive gameplay at high refresh rates.</p>
                <h2>Robust Build Quality</h2>
                <p>Backed by Gainwards reputation for quality and reliability, the RTX 4080 Super Panther OC is built to last. With premium components and rigorous testing procedures, you can trust this graphics card to deliver exceptional performance and stability, whether youre gaming, streaming, or creating content.</p>
                <h2>Take Your Gaming to the Next Level</h2>
                <p>With its powerful performance, advanced cooling design, and customizable RGB lighting, the Gainward GeForce RTX 4080 Super Panther OC 16GB GDDR6X graphics card is the ultimate choice for gamers and enthusiasts alike. Elevate your gaming experience and immerse yourself in the world of high-performance PC gaming with Gainward.</p>',
            ],
            [
                'ID' => 65,
                'NAME' => 'Sapphire Radeon RX 7800 XT PURE 16GB GDDR6',
                'PRICE' => 585.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 535.0,
                'DESCRIPTION' => '<h2>Elevate Your Gaming Experience</h2>
                <p>Experience next-level gaming performance with the Sapphire Radeon RX 7800 XT PURE graphics card. Designed for gamers who demand the best, this GPU is equipped with 16GB of GDDR6 memory and advanced features to deliver smooth, immersive gaming experiences.</p>
                <h2>Powerful Performance</h2>
                <p>The RX 7800 XT PURE features AMDs RDNA 3 architecture, delivering groundbreaking performance and stunning visual fidelity. With a boost clock speed of XX MHz and XX compute units, this graphics card is capable of handling the latest games and applications with ease.</p>
                <h2>Advanced Cooling Design</h2>
                <p>Stay cool under pressure with Sapphires custom cooling solution. The RX 7800 XT PURE features a triple-fan cooler with large heatsinks and heat pipes to keep temperatures in check during intense gaming sessions. With optimized fan curves and intelligent thermal management, you can push your GPU to the limit without worrying about overheating.</p>
                <h2>Factory Overclocked for Maximum Performance</h2>
                <p>Unlock extra performance right out of the box with Sapphires factory overclocked settings. The RX 7800 XT PURE features a boost clock speed of XX MHz, providing a significant performance boost compared to reference models. Experience higher frame rates, smoother gameplay, and faster rendering times in your favorite games and applications.</p>
                <h2>Real-Time Ray Tracing and FidelityFX Super Resolution</h2>
                <p>Experience lifelike graphics and stunning visual effects with real-time ray tracing technology. The RX 7800 XT PURE features dedicated ray tracing cores for ultra-realistic lighting, reflections, and shadows, bringing your games to life with cinematic detail. With AMDs FidelityFX Super Resolution (FSR), you can enjoy higher frame rates and smoother gameplay without sacrificing image quality.</p>
                <h2>Immersive 4K Gaming</h2>
                <p>With 16GB of ultra-fast GDDR6 memory and support for high-resolution displays, the RX 7800 XT PURE is perfect for immersive 4K gaming experiences. Enjoy stunning visuals, rich textures, and smooth gameplay at the highest resolutions, and see every detail come to life on your screen.</p>
                <h2>Customizable RGB Lighting</h2>
                <p>Personalize your gaming rig with Sapphires customizable RGB lighting. The RX 7800 XT PURE features RGB lighting on the fans and backplate, allowing you to customize the look of your graphics card to match your setup. Choose from a variety of lighting effects and colors to create your own unique gaming aesthetic.</p>
                <h2>Advanced Connectivity</h2>
                <p>The RX 7800 XT PURE offers a range of connectivity options, including HDMI 2.1 and DisplayPort 1.4, allowing you to connect to the latest high-resolution displays and VR headsets. With support for AMD FreeSync technology, you can enjoy tear-free gaming and smooth, responsive gameplay at high refresh rates.</p>
                <h2>Robust Build Quality</h2>
                <p>Backed by Sapphires reputation for quality and reliability, the RX 7800 XT PURE is built to last. With premium components and rigorous testing procedures, you can trust this graphics card to deliver exceptional performance and stability, whether youre gaming, streaming, or creating content.</p>
                <h2>Take Your Gaming to the Next Level</h2>
                <p>With its powerful performance, advanced cooling design, and customizable RGB lighting, the Sapphire Radeon RX 7800 XT PURE 16GB GDDR6 graphics card is the ultimate choice for gamers and enthusiasts alike. Elevate your gaming experience and immerse yourself in the world of high-performance PC gaming with Sapphire.</p>',
            ],
            [
                'ID' => 66,
                'NAME' => 'ASUS GeForce RTX 4090 ROG Strix Gaming White 24GB GDDR6X',
                'PRICE' => 2000.0,
                'QUANTITIES_AVAILABLE' => 9,
                'SALE_ID' => null,
                'OLD_PRICE' => 1950.0,
                'DESCRIPTION' => '<h2>Elevate Your Gaming Experience</h2>
                <p>Experience unparalleled gaming performance with the ASUS GeForce RTX 4090 ROG Strix Gaming White graphics card. Featuring a stunning white design, advanced cooling technology, and 24GB of GDDR6X memory, this GPU is engineered to deliver uncompromising performance for the most demanding gamers and enthusiasts.</p>

                <h2>Next-Generation Graphics Performance</h2>
                <p>Powered by NVIDIAs Ampere architecture, the RTX 4090 ROG Strix Gaming White delivers groundbreaking performance and unrivaled visual fidelity. With 24GB of ultra-fast GDDR6X memory and a boost clock speed of XX MHz, this graphics card is designed to handle the most demanding games and applications with ease.</p>

                <h2>Advanced Cooling Technology</h2>
                <p>Stay cool under pressure with ASUSs advanced cooling solution. The RTX 4090 ROG Strix Gaming White features a triple-fan cooler with Axial-tech fans and MaxContact technology to maximize airflow and heat dissipation. With a reinforced frame and precision-engineered heatsinks, this graphics card ensures optimal thermal performance even under heavy load.</p>

                <h2>Factory Overclocked for Maximum Performance</h2>
                <p>Unlock extra performance right out of the box with ASUSs factory overclocked settings. The RTX 4090 ROG Strix Gaming White features a boost clock speed of XX MHz, providing a significant performance boost compared to reference models. Experience higher frame rates, smoother gameplay, and faster rendering times in your favorite games and applications.</p>

                <h2>Real-Time Ray Tracing and DLSS</h2>
                <p>Experience lifelike graphics and stunning visual effects with real-time ray tracing technology. The RTX 4090 ROG Strix Gaming White features dedicated ray tracing cores for ultra-realistic lighting, reflections, and shadows, bringing your games to life with cinematic detail. With NVIDIA DLSS (Deep Learning Super Sampling), you can enjoy higher frame rates and smoother gameplay without sacrificing image quality.</p>

                <h2>Immersive 8K Gaming</h2>
                <p>With 24GB of ultra-fast GDDR6X memory and support for high-resolution displays, the RTX 4090 ROG Strix Gaming White is perfect for immersive 8K gaming experiences. Enjoy stunning visuals, rich textures, and smooth gameplay at the highest resolutions, and see every detail come to life on your screen.</p>

                <h2>Customizable RGB Lighting</h2>
                <p>Personalize your gaming rig with ASUSs customizable RGB lighting. The RTX 4090 ROG Strix Gaming White features RGB lighting on the fans and backplate, allowing you to customize the look of your graphics card to match your setup. Choose from a variety of lighting effects and colors to create your own unique gaming aesthetic.</p>

                <h2>Advanced Connectivity</h2>
                <p>The RTX 4090 ROG Strix Gaming White offers a range of connectivity options, including HDMI 2.1 and DisplayPort 1.4, allowing you to connect to the latest high-resolution displays and VR headsets. With support for NVIDIA G-SYNC technology, you can enjoy tear-free gaming and smooth, responsive gameplay at high refresh rates.</p>

                <h2>Robust Build Quality</h2>
                <p>Backed by ASUSs reputation for quality and reliability, the RTX 4090 ROG Strix Gaming White is built to last. With premium components and rigorous testing procedures, you can trust this graphics card to deliver exceptional performance and stability, whether youre gaming, streaming, or creating content.</p>

                <h2>Take Your Gaming to the Next Level</h2>
                <p>With its powerful performance, advanced cooling technology, and customizable RGB lighting, the ASUS GeForce RTX 4090 ROG Strix Gaming White 24GB GDDR6X graphics card is the ultimate choice for gamers and enthusiasts alike. Elevate your gaming experience and immerse yourself in the world of high-performance PC gaming with ASUS.</p>',
            ],
            [
                'ID' => 67,
                'NAME' => 'Lexar 32GB (2x16GB) 7200MHz CL34 ARES RGB Gaming',
                'PRICE' => 150.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 200.0,
                'DESCRIPTION' => '<h3>Lexar 32GB (2x16GB) 7200MHz CL34 ARES RGB Gaming Memory Kit</h3>

                <p>Elevate your gaming experience with the Lexar ARES RGB Gaming Memory Kit. Designed for high-performance gaming rigs, this memory kit combines blazing-fast speeds, ample capacity, and customizable RGB lighting to take your gaming to the next level.</p>

                <h3>Blazing-Fast Speeds</h3>
                <p>With a clock speed of 7200MHz and ultra-low CL34 latency, the Lexar ARES RGB Gaming Memory Kit delivers lightning-fast performance. Experience smoother gameplay, faster load times, and seamless multitasking with this high-speed memory kit.</p>

                <h3>Ample Capacity</h3>
                <p>Featuring a total capacity of 32GB (2x16GB), this memory kit provides ample space for storing your favorite games, applications, and multimedia files. Enjoy smooth performance and responsive multitasking, even with the most demanding tasks.</p>

                <h3>Customizable RGB Lighting</h3>
                <p>Enhance your gaming setup with customizable RGB lighting. The Lexar ARES RGB Gaming Memory Kit features dynamic RGB lighting effects that can be customized to match your gaming rigs aesthetic. Choose from a wide range of colors and lighting patterns to create your own unique look.</p>

                <h3>Optimized for Gaming</h3>
                <p>The Lexar ARES RGB Gaming Memory Kit is optimized for gaming performance. With its high-speed DDR4 memory and low-latency design, this memory kit ensures smooth gameplay, faster frame rates, and improved system responsiveness, giving you the competitive edge you need to dominate the battlefield.</p>

                <h3>Easy Installation</h3>
                <p>Installation is quick and easy with the Lexar ARES RGB Gaming Memory Kit. Simply plug the memory modules into your motherboards DIMM slots and secure them in place. The memory kit is compatible with most modern motherboards, ensuring hassle-free installation.</p>

                <h3>Reliable Performance</h3>
                <p>Backed by Lexars reputation for quality and reliability, the ARES RGB Gaming Memory Kit is built to last. Rigorously tested for compatibility and reliability, this memory kit is designed to withstand the rigors of gaming and deliver consistent performance over time.</p>

                <p>Transform your gaming experience with the Lexar ARES RGB Gaming Memory Kit. With its blazing-fast speeds, ample capacity, and customizable RGB lighting, this memory kit is the perfect choice for gamers who demand the best.</p>',
            ],
            [
                'ID' => 68,
                'NAME' => 'Kingston FURY 32GB (2x16GB) 5600MHz CL36 Beast Black EXPO AMD',
                'PRICE' => 50.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => 6,
                'OLD_PRICE' => 70.0,
                'DESCRIPTION' => '<h3>Kingston FURY 32GB (2x16GB) 5600MHz CL36 Beast Black EXPO AMD Memory Kit</h3>

                <p>Upgrade your gaming rig with the Kingston FURY Beast Black EXPO AMD Memory Kit. Designed for high-performance gaming systems, this memory kit combines blazing-fast speeds, ample capacity, and reliable compatibility with AMD platforms to enhance your gaming experience.</p>

                <h3>Blazing-Fast Speeds</h3>
                <p>Featuring a lightning-fast clock speed of 5600MHz and ultra-low CL36 latency, the Kingston FURY Beast Black EXPO AMD Memory Kit delivers exceptional performance for gaming and multitasking. Experience smoother gameplay, faster load times, and improved system responsiveness with this high-speed memory kit.</p>

                <h3>Ample Capacity</h3>
                <p>With a total capacity of 32GB (2x16GB), this memory kit provides ample space for storing your favorite games, applications, and multimedia files. Enjoy smooth performance and seamless multitasking, even with the most demanding tasks.</p>

                <h3>Optimized for AMD Platforms</h3>
                <p>The Kingston FURY Beast Black EXPO AMD Memory Kit is specially optimized for compatibility with AMD platforms, ensuring reliable performance and seamless integration with your AMD-powered gaming system. Experience maximum stability and compatibility with AMD Ryzen processors and motherboards.</p>

                <h3>Stylish Design</h3>
                <p>Featuring a sleek black design, the Kingston FURY Beast Black EXPO AMD Memory Kit adds a touch of style to your gaming rig. The low-profile heat spreader not only looks great but also helps dissipate heat for improved thermal performance.</p>

                <h3>Easy Installation</h3>
                <p>Installation is quick and easy with the Kingston FURY Beast Black EXPO AMD Memory Kit. Simply plug the memory modules into your motherboards DIMM slots and secure them in place. The memory kit is compatible with most modern motherboards, ensuring hassle-free installation.</p>

                <h3>Reliable Performance</h3>
                <p>Backed by Kingstons reputation for quality and reliability, the FURY Beast Black EXPO AMD Memory Kit is built to last. Rigorously tested for compatibility and reliability, this memory kit is designed to withstand the rigors of gaming and deliver consistent performance over time.</p>

                <p>Take your gaming to the next level with the Kingston FURY Beast Black EXPO AMD Memory Kit. With its blazing-fast speeds, ample capacity, and stylish design, this memory kit is the perfect choice for gamers who demand the best.</p>',
            ],
            [
                'ID' => 69,
                'NAME' => 'GOODRAM 32GB (2x16GB) 3600MHz CL18 IRDM PRO Deep Black',
                'PRICE' => 100.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 135.0,
                'DESCRIPTION' => '<h3>GOODRAM 32GB (2x16GB) 3600MHz CL18 IRDM PRO Deep Black Memory Kit</h3>
                <p>Elevate your systems performance with the GOODRAM IRDM PRO Deep Black Memory Kit. Designed for enthusiasts and gamers, this memory kit offers high-speed performance, ample capacity, and sleek aesthetics to enhance your computing experience.</p>
                <h3>High-Speed Performance</h3>
                <p>Featuring a clock speed of 3600MHz and low CL18 latency, the GOODRAM IRDM PRO Deep Black Memory Kit delivers blazing-fast performance for smooth multitasking, gaming, and content creation. Experience improved system responsiveness and faster data transfer speeds with this high-speed memory kit.</p>
                <h3>Ample Capacity</h3>
                <p>With a total capacity of 32GB (2x16GB), this memory kit provides ample space for running demanding applications, multitasking with multiple programs, and storing large files. Enjoy seamless performance and smooth multitasking without worrying about running out of memory.</p>
                <h3>Sleek Aesthetics</h3>
                <p>The GOODRAM IRDM PRO Deep Black Memory Kit features a stylish design with a deep black heat spreader that adds a touch of elegance to your system. The sleek aesthetics complement any build and enhance the overall look of your gaming rig or workstation.</p>
                <h3>Optimized Compatibility</h3>
                <p>Designed for compatibility with a wide range of motherboards, the GOODRAM IRDM PRO Deep Black Memory Kit ensures seamless integration and reliable performance. Whether youre building a new system or upgrading an existing one, this memory kit is compatible with most modern platforms.</p>
                <h3>Enhanced Cooling</h3>
                <p>The heat spreader on the GOODRAM IRDM PRO Deep Black Memory Kit is designed to efficiently dissipate heat and keep the memory modules cool during intense gaming sessions or heavy workloads. Enjoy enhanced thermal performance and improved stability, even under demanding conditions.</p>
                <h3>Easy Installation</h3>
                <p>Installation is quick and easy with the GOODRAM IRDM PRO Deep Black Memory Kit. Simply insert the memory modules into the appropriate DIMM slots on your motherboard and secure them in place. The memory kit is compatible with most standard DDR4 slots, ensuring hassle-free installation.</p>
                <h3>Reliable Performance</h3>
                <p>Backed by GOODRAMs reputation for quality and reliability, the IRDM PRO Deep Black Memory Kit is built to last. Each memory module undergoes rigorous testing to ensure optimal performance, compatibility, and stability, so you can trust your system to perform flawlessly.</p>
                <p>Upgrade your system with the GOODRAM IRDM PRO Deep Black Memory Kit and experience the ultimate combination of speed, capacity, and style. Whether youre gaming, creating content, or multitasking, this memory kit delivers the performance and reliability you need.</p>',
            ],
            [
                'ID' => 70,
                'NAME' => 'Patriot 32GB (2x16GB) 6000MHz CL36 VIPER VENOM',
                'PRICE' => 120.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 135.0,
                'DESCRIPTION' => '<h3>Patriot 32GB (2x16GB) 6000MHz CL36 VIPER VENOM Memory Kit</h3>
                <p>Upgrade your gaming experience with the Patriot VIPER VENOM Memory Kit. Designed for high-performance systems, this memory kit offers blazing-fast speeds, ample capacity, and reliable performance to take your gaming to the next level.</p>
                <h3>Blazing-Fast Speeds</h3>
                <p>The Patriot VIPER VENOM Memory Kit boasts a clock speed of 6000MHz, delivering lightning-fast performance for seamless gaming and multitasking. With ultra-low CL36 latency, you can enjoy responsive gameplay and smooth system operation even during intense gaming sessions.</p>
                <h3>Ample Capacity</h3>
                <p>With a total capacity of 32GB (2x16GB), this memory kit provides ample space for running demanding games, multitasking with multiple applications, and handling large files. Experience enhanced performance and improved productivity without worrying about running out of memory.</p>
                <h3>Extreme Performance</h3>
                <p>Designed for extreme overclocking, the Patriot VIPER VENOM Memory Kit is optimized for maximum performance and stability. Whether youre pushing your system to the limit or competing in eSports tournaments, this memory kit delivers the speed and reliability you need to stay ahead of the competition.</p>
                <h3>Enhanced Cooling</h3>
                <p>The VIPER VENOM Memory Kit features a high-quality heat spreader designed to dissipate heat and keep the memory modules cool under heavy load. Enjoy improved thermal performance and increased reliability, even during extended gaming sessions or overclocking.</p>
                <h3>Customizable RGB Lighting</h3>
                <p>Add style to your gaming rig with customizable RGB lighting effects. The VIPER VENOM Memory Kit features RGB lighting that can be customized to match your gaming setup or mood. Choose from a wide range of colors and effects to create the perfect ambiance for your gaming environment.</p>
                <h3>Easy Installation</h3>
                <p>Installation is quick and easy with the Patriot VIPER VENOM Memory Kit. Simply insert the memory modules into the appropriate DIMM slots on your motherboard and secure them in place. The memory kit is compatible with most standard DDR4 slots, ensuring hassle-free installation.</p>
                <h3>Reliable Performance</h3>
                <p>Backed by Patriots reputation for quality and reliability, the VIPER VENOM Memory Kit is built to last. Each memory module undergoes rigorous testing to ensure optimal performance, compatibility, and stability, so you can trust your system to perform flawlessly.</p>
                <p>Elevate your gaming experience with the Patriot VIPER VENOM Memory Kit and unleash the full potential of your system. With ultra-fast speeds, ample capacity, and customizable RGB lighting, this memory kit delivers the performance and style you need to dominate the competition.</p>',
            ],
            [
                'ID' => 71,
                'NAME' => 'Lexar 32GB (2x16GB) 3200MHz CL16 Thor',
                'PRICE' => 80.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 95.0,
                'DESCRIPTION' => '<h2>Lexar 32GB (2x16GB) 3200MHz CL16 Thor Memory Kit</h2>
                <p>Upgrade your systems memory with the Lexar Thor Memory Kit, offering impressive performance and reliability for your computing needs.</p>
                <h2>High-Speed Performance</h2>
                <p>The Lexar Thor Memory Kit boasts a clock speed of 3200MHz, providing fast and responsive performance for multitasking, gaming, and multimedia applications. With low CL16 latency, you can experience smooth and efficient operation even during demanding tasks.</p>
                <h2>Ample Capacity</h2>
                <p>With a total capacity of 32GB (2x16GB), this memory kit offers ample space for running multiple applications simultaneously, handling large files, and storing multimedia content. Enjoy improved performance and responsiveness without worrying about running out of memory.</p>
                <h2>Reliable Stability</h2>
                <p>Designed for stability and reliability, the Lexar Thor Memory Kit ensures consistent performance under various workloads. Whether youre gaming, editing videos, or running productivity software, you can rely on this memory kit to deliver reliable operation.</p>
                <h2>Enhanced Cooling</h2>
                <p>The Lexar Thor Memory Kit features a heat spreader design to dissipate heat effectively, keeping the memory modules cool during extended use. This helps maintain optimal performance and stability, even under heavy workloads or overclocking sPRICErios.</p>
                <h2>Plug-and-Play Installation</h2>
                <p>Installation is quick and hassle-free with the Lexar Thor Memory Kit. Simply insert the memory modules into the appropriate DIMM slots on your motherboard, and the memory will be automatically detected. Enjoy seamless integration and instant performance improvements.</p>
                <h2>Compatibility</h2>
                <p>The Lexar Thor Memory Kit is compatible with a wide range of desktop systems, making it easy to upgrade your existing setup. Whether youre building a new PC or upgrading an older system, this memory kit offers compatibility with most modern motherboards.</p>
                <h2>Ideal for Gaming and Productivity</h2>
                <p>Whether youre a gamer, content creator, or power user, the Lexar Thor Memory Kit delivers the performance and reliability you need. Boost your gaming experience, enhance your productivity, and enjoy smooth multitasking with this high-quality memory solution.</p>
                <h2>Conclusion</h2>
                <p>Upgrade your system with the Lexar Thor Memory Kit and experience improved performance, reliability, and responsiveness. With fast speeds, ample capacity, and enhanced cooling, this memory kit is an ideal choice for gamers, professionals, and enthusiasts alike.</p>',
            ],
            [
                'ID' => 72,
                'NAME' => 'Kingston FURY 32GB (2x16GB) 3600MHz CL16 Renegade Black',
                'PRICE' => 90.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 95.0,
                'DESCRIPTION' => '<h2>Kingston FURY 32GB (2x16GB) 3600MHz CL16 Renegade Black Memory Kit</h2>
                <p>Elevate your gaming experience and system performance with the Kingston FURY Renegade Black Memory Kit. Engineered for speed, reliability, and style, this memory kit enhances your gaming rigs capabilities and ensures smooth multitasking for demanding tasks.</p>
                <h2>High-Speed Performance</h2>
                <p>The Kingston FURY Renegade Black Memory Kit operates at a blistering speed of 3600MHz, providing lightning-fast responsiveness and seamless multitasking capabilities. With low CL16 latency, it delivers quick data access and ensures smooth performance even during intense gaming sessions or content creation tasks.</p>
                <h2>Enhanced Gaming Experience</h2>
                <p>Designed specifically for gamers, the Kingston FURY Renegade Black Memory Kit offers the perfect combination of speed and capacity to handle modern AAA titles and high-resolution gaming. Enjoy faster load times, smoother gameplay, and reduced stuttering for an immersive gaming experience.</p>
                <h2>Reliable Stability</h2>
                <p>Backed by Kingstons renowned reliability and quality assurance, the FURY Renegade Black Memory Kit delivers consistent performance and stability under various workloads. Whether youre overclocking your system or running resource-intensive applications, you can count on this memory kit to maintain reliable operation.</p>
                <h2>Aggressive Design</h2>
                <p>The Kingston FURY Renegade Black Memory Kit features a sleek and aggressive design with black heat spreaders that complement any gaming setup. The premium aesthetics add a touch of style to your rig while ensuring efficient heat dissipation for optimal performance.</p>
                <h2>Plug-and-Play Installation</h2>
                <p>Installation is hassle-free with the Kingston FURY Renegade Black Memory Kit. Simply insert the memory modules into the appropriate DIMM slots on your motherboard, and they will be automatically detected. Enjoy seamless integration and instant performance enhancements without any manual configuration.</p>
                <h2>Compatibility</h2>
                <p>Compatible with most modern Intel and AMD platforms, the Kingston FURY Renegade Black Memory Kit offers broad compatibility for hassle-free installation in a wide range of gaming systems. Whether youre building a new PC or upgrading an existing one, this memory kit ensures compatibility and reliability.</p>
                <h2>Ideal for Enthusiasts and Gamers</h2>
                <p>Whether youre a hardcore gamer, overclocking enthusiast, or power user, the Kingston FURY Renegade Black Memory Kit delivers the speed, performance, and reliability you need to stay ahead of the competition. Elevate your gaming experience and unleash the full potential of your system with this high-performance memory solution.</p>
                <h2>Conclusion</h2>
                <p>Upgrade your gaming rig with the Kingston FURY Renegade Black Memory Kit and experience unparalleled speed, reliability, and style. With its high-speed performance, aggressive design, and plug-and-play installation, this memory kit is the perfect choice for gamers and enthusiasts seeking uncompromising performance and aesthetics.</p>',
            ],
            [
                'ID' => 73,
                'NAME' => 'Lexar 32GB (2x16GB) 3600MHz CL18 Thor',
                'PRICE' => 100.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 105.0,
                'DESCRIPTION' => '<h2>Lexar 32GB (2x16GB) 3600MHz CL18 Thor Memory Kit</h2>
                <p>Elevate your gaming and computing experience with the Lexar Thor Memory Kit. Engineered for high-speed performance and reliability, this memory kit ensures seamless multitasking, smooth gaming, and efficient data handling for demanding tasks.</p>
                <h2>Blazing Fast Performance</h2>
                <p>The Lexar Thor Memory Kit operates at a lightning-fast speed of 3600MHz, delivering rapid data access and responsiveness for enhanced system performance. With low CL18 latency, it ensures quick access to stored data, resulting in smoother multitasking and reduced loading times for applications and games.</p>
                <h2>Optimized for Gaming</h2>
                <p>Designed for gaming enthusiasts and power users, the Lexar Thor Memory Kit offers the perfect balance of speed and capacity to handle intensive gaming sessions and resource-heavy tasks with ease. Enjoy faster frame rates, snappier gameplay, and improved system responsiveness for an immersive gaming experience.</p>
                <h2>Reliable Stability</h2>
                <p>Backed by Lexars reputation for quality and reliability, the Thor Memory Kit delivers consistent performance and stability under various workloads. Whether youre gaming, streaming, or running demanding applications, you can rely on this memory kit to maintain optimal performance without compromise.</p>
                <h2>Efficient Heat Dissipation</h2>
                <p>The Lexar Thor Memory Kit features a heat spreader design that efficiently dissipates heat to ensure reliable performance even during prolonged gaming sessions or heavy workloads. The heat spreaders help prevent overheating and ensure stable operation, allowing you to push your system to its limits without worrying about thermal throttling.</p>
                <h2>Plug-and-Play Installation</h2>
                <p>Installation is quick and easy with the Lexar Thor Memory Kit. Simply insert the memory modules into the appropriate DIMM slots on your motherboard, and they will be automatically recognized by the system. Enjoy hassle-free setup and instant performance enhancements without the need for manual configuration.</p>
                <h2>Compatibility</h2>
                <p>The Lexar Thor Memory Kit is compatible with a wide range of Intel and AMD platforms, ensuring broad compatibility and seamless integration with your gaming or productivity setup. Whether youre building a new system or upgrading an existing one, this memory kit provides the compatibility and performance you need.</p>
                <h2>Enhanced Productivity</h2>
                <p>Boost your productivity and efficiency with the Lexar Thor Memory Kit. Whether youre multitasking, video editing, or running virtual machines, this memory kit ensures smooth performance and responsiveness for demanding tasks. Experience faster data access and smoother workflow transitions with this high-performance memory solution.</p>
                <h2>Conclusion</h2>
                <p>Upgrade your gaming rig or productivity workstation with the Lexar Thor Memory Kit and experience enhanced speed, reliability, and performance. With its blazing-fast speed, optimized gaming performance, and reliable stability, this memory kit is the perfect choice for gamers, content creators, and power users seeking uncompromising performance and reliability.</p>',
            ],
            [
                'ID' => 74,
                'NAME' => 'Patriot 64GB (2x32GB) 6000MHz CL36 Viper VENOM',
                'PRICE' => 200.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 250.0,
                'DESCRIPTION' => '<h2>Patriot 64GB (2x32GB) 6000MHz CL36 Viper VENOM Memory Kit</h2>

                <p>Elevate your gaming and computing experience with the Patriot Viper VENOM Memory Kit. Engineered for high-speed performance and reliability, this memory kit ensures seamless multitasking, smooth gaming, and efficient data handling for demanding tasks.</p>

                <h2>Blazing Fast Performance</h2>
                <p>The Patriot Viper VENOM Memory Kit operates at an impressive speed of 6000MHz, delivering lightning-fast data access and responsiveness for enhanced system performance. With low CL36 latency, it ensures quick access to stored data, resulting in smoother multitasking and reduced loading times for applications and games.</p>

                <h2>Optimized for Gaming</h2>
                <p>Designed for gaming enthusiasts and power users, the Patriot Viper VENOM Memory Kit offers the perfect balance of speed and capacity to handle intensive gaming sessions and resource-heavy tasks with ease. Enjoy faster frame rates, snappier gameplay, and improved system responsiveness for an immersive gaming experience.</p>

                <h2>Reliable Stability</h2>
                <p>Backed by Patriots reputation for quality and reliability, the Viper VENOM Memory Kit delivers consistent performance and stability under various workloads. Whether youre gaming, streaming, or running demanding applications, you can rely on this memory kit to maintain optimal performance without compromise.</p>

                <h2>Efficient Heat Dissipation</h2>
                <p>The Patriot Viper VENOM Memory Kit features a heat spreader design that efficiently dissipates heat to ensure reliable performance even during prolonged gaming sessions or heavy workloads. The heat spreaders help prevent overheating and ensure stable operation, allowing you to push your system to its limits without worrying about thermal throttling.</p>

                <h2>Plug-and-Play Installation</h2>
                <p>Installation is quick and easy with the Patriot Viper VENOM Memory Kit. Simply insert the memory modules into the appropriate DIMM slots on your motherboard, and they will be automatically recognized by the system. Enjoy hassle-free setup and instant performance enhancements without the need for manual configuration.</p>

                <h2>Compatibility</h2>
                <p>The Patriot Viper VENOM Memory Kit is compatible with a wide range of Intel and AMD platforms, ensuring broad compatibility and seamless integration with your gaming or productivity setup. Whether youre building a new system or upgrading an existing one, this memory kit provides the compatibility and performance you need.</p>

                <h2>Enhanced Productivity</h2>
                <p>Boost your productivity and efficiency with the Patriot Viper VENOM Memory Kit. Whether youre multitasking, video editing, or running virtual machines, this memory kit ensures smooth performance and responsiveness for demanding tasks. Experience faster data access and smoother workflow transitions with this high-performance memory solution.</p>

                <h2>Conclusion</h2>
                <p>Upgrade your gaming rig or productivity workstation with the Patriot Viper VENOM Memory Kit and experience enhanced speed, reliability, and performance. With its blazing-fast speed, optimized gaming performance, and reliable stability, this memory kit is the perfect choice for gamers, content creators, and power users seeking uncompromising performance and reliability.</p>',
            ],
            [
                'ID' => 75,
                'NAME' => 'Kingston FURY 16GB (2x16GB) 3600MHz CL16 Renegade Black',
                'PRICE' => 100.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 135.0,
                'DESCRIPTION' => '<h2>Kingston FURY 16GB (2x16GB) 3600MHz CL16 Renegade Black Memory Kit</h2>

                <p>Elevate your gaming experience and system performance with the Kingston FURY Renegade Black Memory Kit. Designed for enthusiasts and gamers, this memory kit delivers high-speed performance, reliability, and impressive aesthetics to enhance your gaming rig.</p>

                <h2>Blazing Speed</h2>
                <p>The Kingston FURY Renegade Black Memory Kit operates at an impressive speed of 3600MHz, providing lightning-fast data access and seamless multitasking. With low CL16 latency, it ensures quick response times and reduced loading times for applications and games, giving you a competitive edge in gaming and productivity tasks.</p>

                <h2>Optimized for Gaming</h2>
                <p>Engineered for gaming enthusiasts, the Kingston FURY Renegade Black Memory Kit offers the perfect combination of speed and capacity to handle demanding gaming sessions and intensive workloads. Experience smoother gameplay, faster frame rates, and improved system responsiveness for an immersive gaming experience.</p>

                <h2>Enhanced Aesthetics</h2>
                <p>Featuring a sleek black heatsink with a stylish design, the Kingston FURY Renegade Black Memory Kit adds a touch of elegance to your gaming rig. The black heatsink not only looks great but also helps dissipate heat effectively to ensure reliable performance during extended gaming sessions or heavy workloads.</p>

                <h2>Reliable Performance</h2>
                <p>Backed by Kingstons reputation for quality and reliability, the FURY Renegade Black Memory Kit delivers consistent performance and stability under various conditions. Whether youre gaming, streaming, or multitasking, you can count on this memory kit to maintain optimal performance without compromise.</p>

                <h2>Plug-and-Play Installation</h2>
                <p>Installation is quick and easy with the Kingston FURY Renegade Black Memory Kit. Simply insert the memory modules into the appropriate DIMM slots on your motherboard, and they will be automatically recognized by the system. Enjoy hassle-free setup and instant performance enhancements without the need for manual configuration.</p>

                <h2>Compatibility</h2>
                <p>The Kingston FURY Renegade Black Memory Kit is compatible with a wide range of Intel and AMD platforms, ensuring broad compatibility and seamless integration with your gaming setup. Whether youre building a new gaming rig or upgrading an existing one, this memory kit provides the compatibility and performance you need.</p>

                <h2>Conclusion</h2>
                <p>Upgrade your gaming rig with the Kingston FURY Renegade Black Memory Kit and experience enhanced speed, reliability, and aesthetics. With its blazing-fast speed, optimized gaming performance, and stylish design, this memory kit is the perfect choice for gamers seeking uncompromising performance and style.</p>',
            ],
            [
                'ID' => 76,
                'NAME' => 'Patriot 32GB (2x16GB) 3600MHz CL18 Viper Steel',
                'PRICE' => 56.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 78.0,
                'DESCRIPTION' => '<h2>Patriot 32GB (2x16GB) 3600MHz CL18 Viper Steel Memory Kit</h2>
                <p>Upgrade your systems performance with the Patriot Viper Steel Memory Kit. Designed for enthusiasts and gamers, this memory kit delivers high-speed performance, reliability, and exceptional multitasking capabilities to enhance your computing experience.</p>
                <h2>Blazing Speed</h2>
                <p>The Patriot Viper Steel Memory Kit operates at a blistering speed of 3600MHz, providing lightning-fast data access and seamless multitasking. With low CL18 latency, it ensures quick response times and reduced loading times for applications and games, boosting overall system performance.</p>
                <h2>Enhanced Gaming Performance</h2>
                <p>Engineered for gaming enthusiasts, the Patriot Viper Steel Memory Kit offers the perfect combination of speed and capacity to handle demanding gaming sessions and intensive workloads. Experience smoother gameplay, faster frame rates, and improved system responsiveness for an immersive gaming experience.</p>
                <h2>Robust Construction</h2>
                <p>Featuring a sleek and durable aluminum heat spreader, the Patriot Viper Steel Memory Kit not only looks great but also helps dissipate heat effectively to ensure reliable performance during extended gaming sessions or heavy workloads. The heat spreaders low-profile design ensures compatibility with most CPU coolers.</p>
                <h2>Plug-and-Play Installation</h2>
                <p>Installation is quick and easy with the Patriot Viper Steel Memory Kit. Simply insert the memory modules into the appropriate DIMM slots on your motherboard, and they will be automatically recognized by the system. Enjoy hassle-free setup and instant performance enhancements without the need for manual configuration.</p>
                <h2>Reliable Performance</h2>
                <p>Backed by Patriots reputation for quality and reliability, the Viper Steel Memory Kit delivers consistent performance and stability under various conditions. Whether youre gaming, streaming, or multitasking, you can count on this memory kit to maintain optimal performance without compromise.</p>
                <h2>Compatibility</h2>
                <p>The Patriot Viper Steel Memory Kit is compatible with a wide range of Intel and AMD platforms, ensuring broad compatibility and seamless integration with your system. Whether youre building a new gaming rig or upgrading an existing one, this memory kit provides the compatibility and performance you need.</p>
                <h2>Conclusion</h2>
                <p>Upgrade your system with the Patriot Viper Steel Memory Kit and experience enhanced speed, reliability, and multitasking capabilities. With its blazing-fast speed, robust construction, and plug-and-play installation, this memory kit is the perfect choice for gamers and enthusiasts seeking uncompromising performance and reliability.</p>',
            ],
            [
                'ID' => 77,
                'NAME' => 'Gigabyte B650M GAMING X AX',
                'PRICE' => 256.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 278.0,
                'DESCRIPTION' => '    <h3>Gigabyte B650M GAMING X AX: Elevate Your Gaming Experience</h3>
                <p>Experience the ultimate gaming performance and immersive visuals with the Gigabyte B650M GAMING X AX motherboard. Designed for gamers and enthusiasts, this motherboard combines cutting-edge features, robust construction, and advanced technologies to deliver an unparalleled gaming experience.</p>
                <h3>Powerful Performance</h3>
                <p>Powered by the latest Intel B650 chipset, the Gigabyte B650M GAMING X AX motherboard supports 12th generation Intel Core processors, providing exceptional performance for gaming, content creation, and multitasking. With support for DDR5 memory and PCIe 5.0 technology, this motherboard delivers lightning-fast data transfer speeds and responsive system performance.</p>
                <h3>Immersive Gaming Experience</h3>
                <p>Immerse yourself in the action with the Gigabyte B650M GAMING X AX motherboard. Equipped with advanced audio technologies and high-quality components, including AMP-UP Audio and Nichicon Fine Gold capacitors, this motherboard delivers immersive sound and crystal-clear audio for a lifelike gaming experience.</p>
                <h3>Enhanced Connectivity</h3>
                <p>Stay connected and experience lag-free gaming with the Gigabyte B650M GAMING X AX motherboard. Featuring high-speed Ethernet LAN, Wi-Fi 6E connectivity, and Bluetooth 5.2 support, this motherboard ensures seamless online gaming and networking performance.</p>
                <h3>Advanced Cooling Solutions</h3>
                <p>Keep your system cool and stable during intense gaming sessions with the Gigabyte B650M GAMING X AX motherboard. Equipped with advanced cooling solutions, including multi-zone heatsinks and Smart Fan technology, this motherboard ensures efficient heat dissipation and optimal thermal performance for your components.</p>
                <h3>RGB Fusion 3.0</h3>
                <p>Customize your gaming rig with vibrant RGB lighting effects using Gigabytes RGB Fusion 3.0 software. With support for addressable RGB headers and customizable LED effects, you can personalize your systems lighting to match your gaming setup and create stunning visual effects.</p>
                <h3>User-Friendly Design</h3>
                <p>The Gigabyte B650M GAMING X AX motherboard features a user-friendly design with intuitive BIOS settings and easy-to-use overclocking tools. With Gigabytes exclusive Q-Flash Plus technology, you can easily update your BIOS without installing a CPU or memory, ensuring hassle-free maintenance and optimization.</p>
                <p>Elevate your gaming experience to the next level with the Gigabyte B650M GAMING X AX motherboard. Whether youre a casual gamer or a competitive esports enthusiast, this motherboard provides the performance, features, and reliability you need for the ultimate gaming experience.</p>',
            ],
            [
                'ID' => 78,
                'NAME' => 'MSI MAG B650 TOMAHAWK WIFI',
                'PRICE' => 200.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 220.0,
                'DESCRIPTION' => '    <h3>MSI MAG B650 TOMAHAWK WIFI: Unleash Your Gaming Potential</h3>
                <p>Experience the next level of gaming performance with the MSI MAG B650 TOMAHAWK WIFI motherboard. Designed to meet the demands of gamers and enthusiasts, this motherboard combines powerful features, robust construction, and advanced technologies to deliver an exceptional gaming experience.</p>
                <h3>Powerful Performance</h3>
                <p>Powered by the latest Intel B650 chipset, the MSI MAG B650 TOMAHAWK WIFI motherboard supports 12th generation Intel Core processors, offering unparalleled performance for gaming, content creation, and multitasking. With support for DDR5 memory and PCIe 5.0 technology, this motherboard delivers blazing-fast data transfer speeds and responsive system performance.</p>
                <h3>Enhanced Gaming Connectivity</h3>
                <p>Stay connected and experience lag-free gaming with the MSI MAG B650 TOMAHAWK WIFI motherboard. Featuring built-in Wi-Fi 6E connectivity and high-speed Ethernet LAN, this motherboard ensures seamless online gaming and networking performance. Plus, with Bluetooth 5.2 support, you can easily connect your favorite peripherals and accessories.</p>
                <h3>Immersive Gaming Audio</h3>
                <p>Immerse yourself in the action with the MSI MAG B650 TOMAHAWK WIFI motherboards high-quality audio solutions. Equipped with Audio Boost technology and Nahimic audio enhancer, this motherboard delivers immersive sound and crystal-clear audio for a truly immersive gaming experience.</p>
                <h3>Advanced Cooling Solutions</h3>
                <p>Keep your system cool and stable during intense gaming sessions with the MSI MAG B650 TOMAHAWK WIFI motherboard. Featuring an extended heatsink design and Frozr AI Cooling technology, this motherboard ensures efficient heat dissipation and optimal thermal performance for your components, even under heavy load.</p>
                <h3>Personalized RGB Lighting</h3>
                <p>Customize your gaming rig with vibrant RGB lighting effects using MSIs Mystic Light software. With support for customizable LED effects and multiple RGB headers, you can personalize your systems lighting to match your gaming setup and create stunning visual effects.</p>
                <h3>User-Friendly Design</h3>
                <p>The MSI MAG B650 TOMAHAWK WIFI motherboard features a user-friendly design with intuitive BIOS settings and easy-to-use overclocking tools. With MSIs exclusive Click BIOS 5 interface, you can easily fine-tune your system settings and maximize performance with just a few clicks.</p>
                <p>Unleash your gaming potential with the MSI MAG B650 TOMAHAWK WIFI motherboard. Whether youre a casual gamer or a hardcore enthusiast, this motherboard provides the performance, features, and reliability you need to dominate the competition and take your gaming experience to the next level.</p>',
            ],
            [
                'ID' => 79,
                'NAME' => 'ASUS PRIME B660-PLUS DDR4',
                'PRICE' => 150.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 178.0,
                'DESCRIPTION' => '<h3>ASUS PRIME B660-PLUS DDR4: Elevate Your PC Experience</h3>
                <p>Experience reliable performance and advanced features with the ASUS PRIME B660-PLUS DDR4 motherboard. Designed for productivity and everyday computing tasks, this motherboard combines ASUS renowned quality with the latest technologies to provide a seamless computing experience.</p>
                <h3>Powerful Performance</h3>
                <p>The ASUS PRIME B660-PLUS DDR4 motherboard is powered by the Intel B660 chipset, offering support for 12th generation Intel Core processors. With DDR4 memory support and PCIe 4.0 technology, this motherboard delivers fast and responsive performance for multitasking, content creation, and everyday computing tasks.</p>
                <h3>Comprehensive Connectivity</h3>
                <p>Stay connected and productive with the ASUS PRIME B660-PLUS DDR4 motherboards comprehensive connectivity options. Equipped with multiple USB ports, including USB 3.2 Gen 2 and USB-C, as well as Gigabit LAN and PCIe slots, this motherboard provides ample connectivity for all your devices and peripherals.</p>
                <h3>Enhanced Audio</h3>
                <p>Immerse yourself in high-quality audio with the ASUS PRIME B660-PLUS DDR4 motherboards built-in audio solutions. Featuring ASUS exclusive audio technologies, including Realtek S1200A codec and audio shielding, this motherboard delivers crystal-clear sound for an immersive multimedia experience.</p>
                <h3>Stable and Reliable</h3>
                <p>Designed with durability and reliability in mind, the ASUS PRIME B660-PLUS DDR4 motherboard features high-quality components and industry-leading ASUS reliability standards. With ASUS comprehensive cooling solutions and advanced power delivery, this motherboard ensures stable operation even under heavy load.</p>
                <h3>User-Friendly Design</h3>
                <p>The ASUS PRIME B660-PLUS DDR4 motherboard features a user-friendly design with ASUS intuitive UEFI BIOS interface. With EZ Mode for beginners and Advanced Mode for experienced users, you can easily customize settings, monitor system performance, and overclock your CPU with ease.</p>
                <h3>ASUS AI Networking</h3>
                <p>Optimize your network performance with ASUS AI Networking technology. This intelligent networking solution automatically prioritizes gaming packets for smoother online gaming and streaming, while reducing latency and lag for a seamless online experience.</p>
                <p>Elevate your PC experience with the ASUS PRIME B660-PLUS DDR4 motherboard. Whether youre building a new system or upgrading your existing one, this motherboard offers the performance, reliability, and features you need to take your computing to the next level.</p>',
            ],
            [
                'ID' => 80,
                'NAME' => 'MSI Z790 GAMING PLUS WIFI',
                'PRICE' => 250.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 258.0,
                'DESCRIPTION' => '<h3>MSI Z790 GAMING PLUS WIFI: Elevate Your Gaming Experience</h3>
                <p>Experience the ultimate gaming performance with the MSI Z790 GAMING PLUS WIFI motherboard. Engineered for gamers and enthusiasts, this motherboard combines cutting-edge technology with exceptional features to deliver an immersive gaming experience like no other.</p>
                <h3>Unleash the Power of 12th Gen Intel Core Processors</h3>
                <p>The MSI Z790 GAMING PLUS WIFI motherboard supports 12th generation Intel Core processors, allowing you to unlock the full potential of your gaming rig. With support for DDR5 memory and PCIe 5.0 technology, this motherboard provides blazing-fast performance for demanding gaming sessions and multitasking.</p>
                <h3>Immersive Gaming Audio</h3>
                <p>Dive into the action with immersive gaming audio powered by MSI Audio Boost technology. Featuring a high-quality audio processor and premium audio components, including Nahimic audio enhancer, this motherboard delivers crystal-clear sound with enhanced spatial awareness for a truly immersive gaming experience.</p>
                <h3>Advanced Cooling Solutions</h3>
                <p>Keep your system cool and stable during intense gaming sessions with MSIs advanced cooling solutions. Equipped with an extended heatsink design, M.2 Shield Frozr, and Frozr AI Cooling, this motherboard ensures optimal thermal performance for your components, allowing you to push your system to its limits without overheating.</p>
                <h3>Seamless Connectivity</h3>
                <p>Stay connected with lightning-fast connectivity options on the MSI Z790 GAMING PLUS WIFI motherboard. Featuring built-in WiFi 6E, 2.5G LAN, and USB 3.2 Gen 2x2 ports, this motherboard offers high-speed data transfer and low-latency networking for lag-free online gaming and smooth multimedia streaming.</p>
                <h3>Personalized Gaming Experience</h3>
                <p>Customize your gaming rig with MSI Mystic Light RGB lighting. With support for millions of colors and multiple lighting effects, you can create a personalized gaming setup that reflects your style. Sync your RGB lighting with other compatible devices using MSI Mystic Light Sync for an immersive gaming experience.</p>
                <h3>Easy Overclocking and System Tuning</h3>
                <p>Unlock the full potential of your hardware with MSIs intuitive BIOS interface and advanced overclocking features. With MSIs exclusive Core Boost technology and DDR5 Boost, you can easily overclock your CPU and memory for maximum performance without compromising stability.</p>
                <p>Elevate your gaming experience to the next level with the MSI Z790 GAMING PLUS WIFI motherboard. With its cutting-edge features, advanced technology, and robust design, this motherboard is the perfect choice for gamers who demand the best.</p>',
            ],
            [
                'ID' => 81,
                'NAME' => 'ASUS TUF GAMING B760-PLUS WIFI DDR4',
                'PRICE' => 156.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 178.0,
                'DESCRIPTION' => '<h3>ASUS TUF GAMING B760-PLUS WIFI DDR4: Built to Withstand the Rigors of Gaming</h3>
                <p>Designed for durability and performance, the ASUS TUF GAMING B760-PLUS WIFI DDR4 motherboard is the ideal choice for gamers seeking a reliable foundation for their gaming rig. Engineered with military-grade components and packed with gaming-centric features, this motherboard delivers stability, reliability, and seamless connectivity for an unparalleled gaming experience.</p>

                <h3>Military-Grade Durability</h3>
                <p>Featuring ASUS TUF components and TUF Protection, the TUF GAMING B760-PLUS WIFI DDR4 motherboard is built to withstand the rigors of gaming and overclocking. With enhanced ESD guards, TUF LANGuard, and overvoltage protection, this motherboard offers unmatched durability and reliability, ensuring long-term stability even under extreme conditions.</p>

                <h3>Powerful Performance</h3>
                <p>Powered by Intels latest B760 chipset, the TUF GAMING B760-PLUS WIFI DDR4 motherboard supports 12th generation Intel Core processors, providing exceptional performance for gaming, multitasking, and content creation. With support for DDR4 memory and PCIe 5.0 technology, this motherboard delivers blazing-fast speeds and responsive performance for the most demanding tasks.</p>

                <h3>High-Speed Connectivity</h3>
                <p>Stay connected with high-speed networking options on the TUF GAMING B760-PLUS WIFI DDR4 motherboard. Equipped with built-in WiFi 6E and Intel 2.5G LAN, this motherboard offers lightning-fast wireless and wired connectivity for lag-free online gaming and smooth streaming. Plus, with USB 3.2 Gen 2 ports, you can transfer data quickly and efficiently.</p>

                <h3>Immersive Gaming Audio</h3>
                <p>Experience immersive gaming audio with ASUS SupremeFX audio technology. Featuring Crystal Sound 3 and DTS:X Ultra, the TUF GAMING B760-PLUS WIFI DDR4 motherboard delivers crystal-clear sound with enhanced spatial awareness, allowing you to hear every detail in your favorite games.</p>

                <h3>Customizable RGB Lighting</h3>
                <p>Customize your gaming rig with ASUS Aura Sync RGB lighting. With a wide range of lighting effects and colors to choose from, you can create a personalized gaming setup that reflects your style. Sync your RGB lighting with other Aura Sync-compatible devices for a unified gaming experience.</p>

                <h3>Easy DIY Installation</h3>
                <p>With ASUS Q-LED indicators and Q-Slot and Q-DIMM slots, the TUF GAMING B760-PLUS WIFI DDR4 motherboard makes installation and upgrading easy and hassle-free. Plus, with ASUS BIOS Flashback and CrashFree BIOS 3, you can update your BIOS with ease and recover from system crashes quickly.</p>

                <p>Experience the ultimate gaming performance and reliability with the ASUS TUF GAMING B760-PLUS WIFI DDR4 motherboard. Built to withstand the rigors of gaming and packed with gaming-centric features, this motherboard is the perfect foundation for your gaming rig.</p>',
            ],
            [
                'ID' => 82,
                'NAME' => 'MSI MAG B550 TOMAHAWK WIFI',
                'PRICE' => 170.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 180.0,
                'DESCRIPTION' => '<h3>MSI MAG B550 TOMAHAWK WIFI: Power and Performance for Gaming Enthusiasts</h3>
                <p>Designed for gamers and PC enthusiasts, the MSI MAG B550 TOMAHAWK WIFI motherboard offers a perfect blend of power, performance, and reliability. With support for AMD Ryzen processors and a host of gaming-centric features, this motherboard provides a solid foundation for building a high-performance gaming PC.</p>

                <h3>Robust Power Delivery</h3>
                <p>The MAG B550 TOMAHAWK WIFI features an extended heatsink design with an extended PWM heatsink and enhanced circuit design to ensure stable power delivery to your components, even under heavy load. This robust power delivery system allows for overclocking and ensures reliable performance during intense gaming sessions.</p>

                <h3>Support for AMD Ryzen Processors</h3>
                <p>Compatible with AMD Ryzen processors, including Ryzen 5000 series CPUs, the MAG B550 TOMAHAWK WIFI motherboard offers exceptional performance for gaming, content creation, and multitasking. With support for PCIe 4.0 technology, you can take advantage of high-speed storage and graphics cards for a responsive gaming experience.</p>

                <h3>High-Speed Connectivity</h3>
                <p>Equipped with built-in WiFi 6 and 2.5G LAN, the MAG B550 TOMAHAWK WIFI provides lightning-fast wireless and wired networking options for lag-free gaming and smooth streaming. Plus, with USB 3.2 Gen 2 ports, you can transfer data quickly and easily between your devices.</p>

                <h3>Audio Boost Technology</h3>
                <p>Experience immersive gaming audio with MSI Audio Boost technology. Featuring high-quality audio components and Nahimic audio enhancer, the MAG B550 TOMAHAWK WIFI delivers crystal-clear sound with enhanced spatial awareness, allowing you to hear every detail in your favorite games.</p>

                <h3>Customizable RGB Lighting</h3>
                <p>Personalize your gaming rig with MSI Mystic Light RGB lighting. With customizable RGB headers and support for Mystic Light Sync, you can create stunning lighting effects and synchronize your lighting with other compatible devices for a truly immersive gaming experience.</p>

                <h3>Easy Installation and Setup</h3>
                <p>The MAG B550 TOMAHAWK WIFI features MSIs Click BIOS 5, which offers an intuitive interface for easy system configuration and overclocking. Plus, with MSI Dragon Center software, you can monitor system performance, adjust fan speeds, and customize RGB lighting from a single dashboard.</p>

                <p>With its powerful features, robust build quality, and gaming-centric design, the MSI MAG B550 TOMAHAWK WIFI motherboard is the perfect choice for gamers and PC enthusiasts looking to build a high-performance gaming PC.</p>',
            ],
            [
                'ID' => 83,
                'NAME' => 'Gigabyte B450 AORUS ELITE V2',
                'PRICE' => 56.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 78.0,
                'DESCRIPTION' => '<h3>Gigabyte B450 AORUS ELITE V2: Reliable Performance for Gaming and Productivity</h3>
                <p>The Gigabyte B450 AORUS ELITE V2 motherboard is designed to deliver reliable performance for gaming and productivity tasks. Built with high-quality components and featuring advanced technologies, this motherboard offers a solid foundation for your PC build.</p>

                <h3>Support for AMD Ryzen Processors</h3>
                <p>Compatible with AMD Ryzen processors, the B450 AORUS ELITE V2 motherboard provides excellent performance for gaming, content creation, and everyday computing tasks. With support for multi-core processing and overclocking capabilities, you can unleash the full potential of your CPU.</p>

                <h3>Robust Power Delivery</h3>
                <p>Equipped with an advanced power phase design and high-quality components, the B450 AORUS ELITE V2 ensures stable power delivery to your CPU and other components, even under heavy load. This helps to prevent overheating and ensures reliable performance during intense gaming sessions.</p>

                <h3>Enhanced Cooling Solutions</h3>
                <p>The B450 AORUS ELITE V2 features a comprehensive cooling system with multiple fan headers and advanced thermal management options. With support for aftermarket cooling solutions, you can keep your system cool and stable even during overclocking.</p>

                <h3>High-Speed Connectivity</h3>
                <p>Featuring PCIe Gen3 x4 M.2 slots and USB 3.1 Gen 2 ports, the B450 AORUS ELITE V2 offers high-speed connectivity options for ultra-fast data transfer and storage. With support for Gigabit LAN and onboard WiFi, you can enjoy smooth online gaming and streaming experiences.</p>

                <h3>Customizable RGB Lighting</h3>
                <p>Personalize your gaming rig with Gigabyte RGB Fusion 2.0. With customizable RGB lighting zones and support for digital LED strips, you can create stunning lighting effects to match your gaming setup. Sync your lighting with other compatible devices for a seamless gaming experience.</p>

                <h3>User-Friendly BIOS</h3>
                <p>The B450 AORUS ELITE V2 features Gigabytes award-winning BIOS interface, which offers easy access to advanced features and settings. With intuitive navigation and comprehensive system monitoring tools, you can fine-tune your system for optimal performance.</p>

                <p>Overall, the Gigabyte B450 AORUS ELITE V2 motherboard offers reliable performance, advanced features, and customizable options for gamers and PC enthusiasts alike. Whether youre building a gaming PC or a productivity workstation, this motherboard provides a solid foundation for your build.</p>',
            ],
            [
                'ID' => 84,
                'NAME' => 'ASUS ROG STRIX B550-F GAMING',
                'PRICE' => 130.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 150.0,
                'DESCRIPTION' => '<h3>ASUS ROG STRIX B550-F GAMING: Elevate Your Gaming Experience</h3>
                <p>The ASUS ROG STRIX B550-F GAMING motherboard is engineered to provide gamers with a premium gaming experience, offering a blend of performance, aesthetics, and advanced features. Built with high-quality components and designed for compatibility with the latest hardware, this motherboard is an excellent choice for gaming enthusiasts.</p>

                <h3>Powerful Performance for Gaming</h3>
                <p>Equipped with an AM4 socket and support for AMD Ryzen processors, the ROG STRIX B550-F GAMING delivers powerful performance for gaming and multitasking. With PCIe 4.0 support, high-speed DDR4 memory compatibility, and advanced cooling solutions, you can experience smooth and responsive gameplay even in demanding titles.</p>

                <h3>Robust Power Delivery</h3>
                <p>Featuring an optimized power design with high-quality components, the ROG STRIX B550-F GAMING ensures stable power delivery to your CPU and other components, allowing for reliable performance even under heavy load. This helps to prevent overheating and ensures consistent performance during extended gaming sessions.</p>

                <h3>Comprehensive Cooling Solutions</h3>
                <p>Designed with comprehensive cooling solutions, including multiple fan headers and heatsinks, the ROG STRIX B550-F GAMING helps to keep your system cool and stable even during intense gaming sessions. With support for liquid cooling solutions and customizable fan profiles, you can fine-tune your cooling performance to suit your needs.</p>

                <h3>Immersive Gaming Audio</h3>
                <p>Featuring ASUS SupremeFX audio technology, the ROG STRIX B550-F GAMING delivers immersive gaming audio with crystal-clear sound quality and precise positional audio cues. With support for high-fidelity audio codecs and advanced audio processing features, you can enjoy a competitive edge in your favorite games.</p>

                <h3>Personalized RGB Lighting</h3>
                <p>Express your style with customizable RGB lighting options on the ROG STRIX B550-F GAMING motherboard. With ASUS Aura Sync RGB lighting technology, you can synchronize your lighting effects with other compatible devices, creating a stunning visual experience that enhances your gaming setup.</p>

                <h3>User-Friendly BIOS Interface</h3>
                <p>The ROG STRIX B550-F GAMING features ASUS intuitive BIOS interface, which provides easy access to advanced features and settings. With comprehensive system monitoring tools and overclocking options, you can fine-tune your system for optimal performance and stability.</p>

                <p>Overall, the ASUS ROG STRIX B550-F GAMING motherboard offers gamers a premium gaming experience with its powerful performance, advanced features, and customizable options. Whether youre a casual gamer or a competitive esports player, this motherboard provides the performance and reliability you need to dominate the battlefield.</p>',
            ],
            [
                'ID' => 85,
                'NAME' => 'Gigabyte B550 AORUS ELITE V2',
                'PRICE' => 160.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 180.0,
                'DESCRIPTION' => '<h3>Gigabyte B550 AORUS ELITE V2: Elevate Your Gaming Rig</h3>
                <p>Experience next-level gaming performance with the Gigabyte B550 AORUS ELITE V2 motherboard. Designed to meet the demands of modern gamers and PC enthusiasts, this motherboard combines powerful features, advanced connectivity, and robust build quality to take your gaming experience to new heights.</p>

                <h3>Powerful Performance</h3>
                <p>The Gigabyte B550 AORUS ELITE V2 is equipped with an AM4 socket, providing compatibility with AMD Ryzen processors for unparalleled performance in gaming and multitasking. With support for PCIe 4.0 and high-speed DDR4 memory, you can enjoy smooth and responsive gameplay, even in the most demanding titles.</p>

                <h3>Advanced Cooling Solutions</h3>
                <p>Stay cool under pressure with the B550 AORUS ELITE V2s comprehensive cooling solutions. Featuring an advanced thermal design with multiple fan headers, heatsinks, and thermal pads, this motherboard ensures efficient heat dissipation to keep your system running smoothly, even during intense gaming sessions.</p>

                <h3>High-Speed Connectivity</h3>
                <p>Connectivity is key for gaming, and the B550 AORUS ELITE V2 delivers with high-speed networking options, including Gigabit Ethernet and PCIe 4.0 M.2 slots for ultra-fast storage. With USB 3.2 Gen 2 ports and support for the latest peripherals, you can enjoy seamless connectivity for all your gaming needs.</p>

                <h3>Immersive Audio Experience</h3>
                <p>Immerse yourself in the game with Gigabytes high-fidelity audio technology. The B550 AORUS ELITE V2 features an advanced audio chipset and premium audio capacitors, delivering crystal-clear sound quality and immersive gaming audio that brings your games to life.</p>

                <h3>RGB Fusion 2.0</h3>
                <p>Customize your gaming rig with Gigabytes RGB Fusion 2.0 technology. With customizable RGB lighting zones and effects, you can personalize your setup to match your style and create a gaming environment thats truly unique.</p>

                <h3>Easy-to-Use BIOS Interface</h3>
                <p>Access advanced features and settings with ease thanks to Gigabytes user-friendly BIOS interface. With intuitive controls and comprehensive system monitoring tools, you can optimize your system for maximum performance and stability.</p>

                <p>Overall, the Gigabyte B550 AORUS ELITE V2 motherboard offers gamers a powerful platform for building their dream gaming rig. With its advanced features, robust build quality, and sleek design, this motherboard is the perfect foundation for your gaming setup.</p>',
            ],
            [
                'ID' => 86,
                'NAME' => 'ASUS PRIME B550-PLUS',
                'PRICE' => 100.0,
                'QUANTITIES_AVAILABLE' => 8,
                'SALE_ID' => null,
                'OLD_PRICE' => 120.0,
                'DESCRIPTION' => '<h3>ASUS PRIME B550-PLUS: Your Gateway to Next-Gen Gaming</h3>
                <p>Experience the future of gaming with the ASUS PRIME B550-PLUS motherboard. Designed to deliver exceptional performance, reliability, and versatility, this motherboard is the perfect foundation for your gaming rig.</p>

                <h3>Powerful Performance</h3>
                <p>The ASUS PRIME B550-PLUS features an AM4 socket, providing compatibility with the latest AMD Ryzen processors. With PCIe 4.0 support and high-speed DDR4 memory, you can enjoy blazing-fast speeds and responsive performance in all your favorite games.</p>

                <h3>Comprehensive Connectivity</h3>
                <p>Connectivity is key for gaming, and the PRIME B550-PLUS has you covered. With dual M.2 slots, USB 3.2 Gen 2 ports, and Gigabit Ethernet, you can enjoy lightning-fast data transfer speeds and lag-free online gaming.</p>

                <h3>AI Noise-Canceling Microphone</h3>
                <p>Communicate clearly with your teammates using the built-in AI noise-canceling microphone. This innovative feature reduces background noise and enhances voice clarity, ensuring crystal-clear communication in-game and during video calls.</p>

                <h3>ASUS Aura Sync</h3>
                <p>Customize your gaming setup with ASUS Aura Sync RGB lighting. With a wide range of compatible RGB components and accessories, you can create stunning lighting effects that sync with your gameplay and reflect your personal style.</p>

                <h3>Comprehensive Cooling Solutions</h3>
                <p>Keep your system cool under pressure with the PRIME B550-PLUSs comprehensive cooling solutions. With multiple fan headers, heatsinks, and thermal pads, this motherboard ensures efficient heat dissipation to maintain optimal performance even during intense gaming sessions.</p>

                <h3>Enhanced Audio Experience</h3>
                <p>Immerse yourself in the game with ASUS audio enhancements. The PRIME B550-PLUS features high-fidelity audio components and advanced audio processing technologies, delivering immersive sound quality that brings your games to life.</p>

                <h3>User-Friendly BIOS Interface</h3>
                <p>Take control of your system with the intuitive BIOS interface. With easy-to-use controls and comprehensive system monitoring tools, you can optimize your system settings for maximum performance and stability.</p>

                <p>Overall, the ASUS PRIME B550-PLUS motherboard offers gamers a powerful platform for building their dream gaming rig. With its advanced features, reliable performance, and sleek design, this motherboard is the perfect choice for gamers looking to take their gaming experience to the next level.</p>',
            ],
            [
                'ID' => 87,
                'NAME' => 'MSI MAG 650W 80 Plus Bronze',
                'PRICE' => 100.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 120.0,
                'DESCRIPTION' => '<h2>MSI MAG 650W 80 Plus Bronze Power Supply</h2>

                <p>The MSI MAG 650W power supply is designed to deliver reliable and efficient power to your gaming PC. With its 80 Plus Bronze certification, robust build quality, and advanced features, it provides the performance and stability you need for intense gaming sessions and demanding workloads.</p>

                <h2>Efficient Power Delivery</h2>
                <p>Featuring an 80 Plus Bronze certification, the MSI MAG 650W power supply delivers up to 85% energy efficiency, ensuring stable and reliable power delivery to your system components. This efficiency rating helps reduce energy waste and heat generation, resulting in lower electricity bills and cooler operation.</p>

                <h2>Robust Build Quality</h2>
                <p>Constructed with high-quality components and advanced engineering, the MSI MAG 650W power supply offers excellent reliability and durability. Its robust design and strict quality control measures ensure long-term performance and stability, even under heavy loads and extreme conditions.</p>

                <h2>Quiet Operation</h2>
                <p>The MSI MAG 650W power supply features a silent 120mm fan with optimized blade design and advanced airflow technology. This fan operates quietly while providing efficient cooling, ensuring optimal thermal performance without generating excessive noise.</p>

                <h2>Modular Design</h2>
                <p>Equipped with a modular cable design, the MSI MAG 650W power supply allows you to connect only the cables you need, reducing clutter and improving airflow inside your PC case. This modular design not only simplifies cable management but also enhances the overall aesthetics of your build.</p>

                <h2>Comprehensive Protection Features</h2>
                <p>The MSI MAG 650W power supply is equipped with comprehensive protection features to safeguard your components against various electrical hazards. These include over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP).</p>

                <h2>Compatibility and Connectivity</h2>
                <p>With its ATX form factor and standard connectors, the MSI MAG 650W power supply is compatible with most modern PC cases and motherboards. It comes with a variety of connectors, including 24-pin ATX, 8-pin EPS, PCIe, SATA, and peripheral connectors, ensuring broad compatibility with a wide range of hardware configurations.</p>

                <h2>Conclusion</h2>
                <p>The MSI MAG 650W power supply offers reliable performance, efficient power delivery, and advanced features to meet the demands of gaming enthusiasts and PC builders. With its 80 Plus Bronze certification, robust build quality, quiet operation, modular design, comprehensive protection features, and broad compatibility, it provides a solid foundation for your gaming rig or workstation.</p>',
            ],
            [
                'ID' => 88,
                'NAME' => 'ENDORFY Supremo FM5 1000W 80 Plus Gold',
                'PRICE' => 125.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => 7,
                'OLD_PRICE' => 130.0,
                'DESCRIPTION' => '<h2>ENDORFY Supremo FM5 1000W 80 Plus Gold Power Supply</h2>
                <p>The ENDORFY Supremo FM5 1000W power supply is designed to deliver reliable and efficient power to high-performance gaming rigs and workstations. With its 80 Plus Gold certification, advanced features, and robust build quality, it provides the performance and stability needed for demanding applications.</p>
                <h2>Efficient Power Delivery</h2>
                <p>Featuring an 80 Plus Gold certification, the ENDORFY Supremo FM5 1000W power supply offers up to 90% energy efficiency, ensuring stable and efficient power delivery to your system components. This high efficiency rating reduces energy waste, lowers operating costs, and minimizes heat generation.</p>
                <h2>Robust Build Quality</h2>
                <p>The ENDORFY Supremo FM5 1000W power supply is built with premium components and undergoes rigorous quality control testing to ensure long-term reliability and durability. Its robust design and high-quality construction make it suitable for high-end gaming setups and professional workstations.</p>
                <h2>Quiet Operation</h2>
                <p>Equipped with a silent 140mm fan with optimized blade design and hydraulic bearings, the ENDORFY Supremo FM5 1000W power supply operates quietly while providing efficient cooling. This ensures optimal thermal performance without generating excessive noise, even under heavy loads.</p>
                <h2>Modular Design</h2>
                <p>The ENDORFY Supremo FM5 1000W power supply features a modular cable design, allowing you to connect only the cables you need for your specific configuration. This not only simplifies cable management but also improves airflow inside your PC case, resulting in better overall system cooling.</p>
                <h2>Comprehensive Protection Features</h2>
                <p>Designed with comprehensive protection features, the ENDORFY Supremo FM5 1000W power supply safeguards your components against various electrical hazards. These include over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP).</p>
                <h2>Compatibility and Connectivity</h2>
                <p>With its ATX form factor and standard connectors, the ENDORFY Supremo FM5 1000W power supply is compatible with most PC cases and motherboards on the market. It comes with a variety of connectors, including 24-pin ATX, 8-pin EPS, PCIe, SATA, and peripheral connectors, ensuring broad compatibility with a wide range of hardware configurations.</p>
                <h2>Conclusion</h2>
                <p>The ENDORFY Supremo FM5 1000W power supply offers high efficiency, reliable performance, and advanced features for demanding gaming and workstation setups. With its 80 Plus Gold certification, robust build quality, quiet operation, modular design, comprehensive protection features, and broad compatibility, it provides a solid foundation for building a powerful and stable PC system.</p>',
            ],
            [
                'ID' => 89,
                'NAME' => 'Thermaltake Litepower II Black 550W',
                'PRICE' => 80.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 70.0,
                'DESCRIPTION' => '<h2>Thermaltake Litepower II Black 550W Power Supply</h2>
                <p>The Thermaltake Litepower II Black 550W power supply is a reliable and efficient solution for powering your desktop computer. With its stable performance, high-quality components, and sleek design, it provides the essential power your system needs for everyday computing tasks.</p>
                <h2>Stable and Reliable Performance</h2>
                <p>Equipped with a single +12V rail design, the Thermaltake Litepower II Black 550W power supply delivers stable and reliable power to your system components, ensuring smooth operation and consistent performance. This makes it suitable for basic computing tasks, multimedia entertainment, and light gaming.</p>
                <h2>High-Quality Components</h2>
                <p>The Thermaltake Litepower II Black 550W power supply features high-quality components, including Japanese capacitors, which provide reliable power delivery and long-term durability. These premium components contribute to the power supplys overall reliability and help extend its lifespan.</p>
                <h2>Sleek Design</h2>
                <p>With its sleek black casing and minimalist design, the Thermaltake Litepower II Black 550W power supply complements any PC build, adding a touch of elegance to your system. Its compact form factor and black finish make it blend seamlessly into most computer cases, while the subtle branding adds a touch of style.</p>
                <h2>Quiet Operation</h2>
                <p>The Thermaltake Litepower II Black 550W power supply features a quiet 120mm cooling fan that effectively dissipates heat while keeping noise levels to a minimum. This ensures quiet operation even during extended use, allowing you to focus on your work or enjoy multimedia content without distraction.</p>
                <h2>Comprehensive Protection Features</h2>
                <p>Designed with comprehensive protection features, the Thermaltake Litepower II Black 550W power supply safeguards your components against various electrical hazards. These include over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP).</p>
                <h2>Wide Compatibility</h2>
                <p>With its standard ATX form factor and universal connectors, the Thermaltake Litepower II Black 550W power supply is compatible with a wide range of desktop computer systems. It comes with all the necessary cables and connectors, including 24-pin ATX, 4+4-pin EPS, PCIe, SATA, and peripheral connectors, ensuring broad compatibility with different hardware configurations.</p>
                <h2>Conclusion</h2>
                <p>The Thermaltake Litepower II Black 550W power supply offers stable performance, high-quality components, and a sleek design, making it a reliable and efficient choice for powering your desktop computer. Whether youre building a new system or upgrading an existing one, the Litepower II Black 550W power supply provides the essential power your components need to operate smoothly.</p>',
            ],
            [
                'ID' => 90,
                'NAME' => 'Seasonic Prime TX 1000W 80 Plus Titanium',
                'PRICE' => 400.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 420.0,
                'DESCRIPTION' => '<h2>Seasonic Prime TX 1000W 80 Plus Titanium Power Supply</h2>
                <p>The Seasonic Prime TX 1000W power supply is a high-performance and energy-efficient solution designed to meet the demanding needs of modern gaming rigs and workstation setups. With its 80 Plus Titanium certification, advanced design, and robust construction, it offers exceptional reliability, efficiency, and stability for your PC build.</p>
                <h2>Efficient Power Delivery</h2>
                <p>Featuring an 80 Plus Titanium certification, the Seasonic Prime TX 1000W power supply delivers exceptional energy efficiency, with up to 94% efficiency at typical load conditions. This means less wasted energy, reduced heat output, and lower electricity bills, making it an environmentally friendly choice for your system.</p>
                <h2>High-Performance Components</h2>
                <p>The Seasonic Prime TX 1000W power supply is built with high-quality components, including premium Japanese capacitors, which ensure stable and reliable power delivery under demanding conditions. The use of high-performance components also contributes to the power supplys long-term durability and reliability.</p>
                <h2>Modular Design</h2>
                <p>Featuring a fully modular design, the Seasonic Prime TX 1000W power supply allows you to connect only the cables you need for your system, reducing cable clutter and improving airflow inside your PC case. This makes cable management easier and helps create a cleaner and more organized build.</p>
                <h2>Hybrid Fan Control</h2>
                <p>The Seasonic Prime TX 1000W power supply features a hybrid fan control system that automatically adjusts fan speed according to system load and temperature. Under low to moderate loads, the fan operates silently in fanless mode, ensuring quiet operation during everyday use. When the system is under heavy load, the fan ramps up to provide optimal cooling performance.</p>
                <h2>Comprehensive Protection Features</h2>
                <p>Equipped with comprehensive protection features, including over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP), the Seasonic Prime TX 1000W power supply safeguards your components against various electrical hazards, ensuring reliable operation and peace of mind.</p>
                <h2>Compact and Durable Design</h2>
                <p>With its compact form factor and durable construction, the Seasonic Prime TX 1000W power supply is designed to fit seamlessly into most PC cases while withstanding the rigors of daily use. Its sleek and understated design makes it a stylish addition to any build, while its robust build quality ensures long-term reliability.</p>
                <h2>Conclusion</h2>
                <p>The Seasonic Prime TX 1000W power supply offers exceptional performance, efficiency, and reliability, making it an ideal choice for high-end gaming PCs, workstations, and enthusiast builds. With its 80 Plus Titanium certification, modular design, and comprehensive protection features, it provides the power and stability your system needs to excel in demanding applications.</p>',
            ],
            [
                'ID' => 91,
                'NAME' => 'Seasonic FOCUS SPX 750W 80 Plus Platinum',
                'PRICE' => 200.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 220.0,
                'DESCRIPTION' => '<h2>Seasonic FOCUS SPX 750W 80 Plus Platinum Power Supply</h2>
                <p>The Seasonic FOCUS SPX 750W power supply is a high-quality and efficient solution designed to meet the demanding power requirements of modern PC systems. With its 80 Plus Platinum certification, advanced features, and reliable performance, it delivers stable and clean power to your components, ensuring optimal performance and efficiency.</p>
                <h2>Efficiency and Performance</h2>
                <p>With its 80 Plus Platinum certification, the Seasonic FOCUS SPX 750W power supply achieves up to 92% energy efficiency at typical load conditions. This high level of efficiency reduces wasted energy and helps lower electricity bills, making it an environmentally friendly choice for your system.</p>
                <h2>Modular Design</h2>
                <p>The Seasonic FOCUS SPX 750W power supply features a fully modular design, allowing you to connect only the cables you need for your build. This modular design reduces cable clutter inside your case, improves airflow, and makes cable management easier, resulting in a cleaner and more organized build.</p>
                <h2>Silent Operation</h2>
                <p>Equipped with a silent 120mm fan with a Fluid Dynamic Bearing (FDB), the Seasonic FOCUS SPX 750W power supply operates quietly even under heavy loads. The fans optimized blade design and low noise profile ensure silent operation, allowing you to focus on your work or gaming without distraction.</p>
                <h2>Advanced Protection Features</h2>
                <p>The Seasonic FOCUS SPX 750W power supply is equipped with advanced protection features to safeguard your components against electrical hazards. These include over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP), ensuring reliable operation and peace of mind.</p>
                <h2>Compact and Reliable Design</h2>
                <p>With its compact form factor and reliable build quality, the Seasonic FOCUS SPX 750W power supply is designed to fit seamlessly into most PC cases while providing long-term reliability. Its durable construction and high-quality components ensure stable and consistent power delivery, even under demanding conditions.</p>
                <h2>Conclusion</h2>
                <p>The Seasonic FOCUS SPX 750W power supply offers high efficiency, reliable performance, and silent operation, making it an ideal choice for gaming PCs, workstations, and other high-performance systems. With its modular design, advanced protection features, and compact form factor, it provides the power and stability your system needs to excel in any task.</p>',
            ],
            [
                'ID' => 92,
                'NAME' => 'Cooler Master MWE GOLD-V2 750W 80 Plus Gold',
                'PRICE' => 105.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 120.0,
                'DESCRIPTION' => '<h2>Cooler Master MWE GOLD-V2 750W 80 Plus Gold Power Supply</h2>
                <p>The Cooler Master MWE GOLD-V2 750W power supply is a reliable and efficient solution designed to meet the demanding power requirements of modern PC systems. With its 80 Plus Gold certification, advanced features, and stable performance, it delivers clean and efficient power to your components, ensuring reliable operation and optimal performance.</p>
                <h2>Efficiency and Performance</h2>
                <p>With its 80 Plus Gold certification, the Cooler Master MWE GOLD-V2 750W power supply achieves up to 90% energy efficiency at typical load conditions. This high level of efficiency reduces energy waste and helps lower electricity bills, making it a cost-effective choice for your system.</p>
                <h2>Modular Design</h2>
                <p>The Cooler Master MWE GOLD-V2 750W power supply features a fully modular design, allowing you to connect only the cables you need for your build. This modular design reduces cable clutter inside your case, improves airflow, and makes cable management easier, resulting in a cleaner and more organized build.</p>
                <h2>Silent Operation</h2>
                <p>Equipped with a silent 120mm fan with a LDB (Loop Dynamic Bearing), the Cooler Master MWE GOLD-V2 750W power supply operates quietly even under heavy loads. The fans optimized blade design and low noise profile ensure silent operation, allowing you to focus on your work or gaming without distraction.</p>
                <h2>Advanced Protection Features</h2>
                <p>The Cooler Master MWE GOLD-V2 750W power supply is equipped with advanced protection features to safeguard your components against electrical hazards. These include over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP), ensuring reliable operation and peace of mind.</p>
                <h2>Compact and Reliable Design</h2>
                <p>With its compact form factor and reliable build quality, the Cooler Master MWE GOLD-V2 750W power supply is designed to fit seamlessly into most PC cases while providing long-term reliability. Its durable construction and high-quality components ensure stable and consistent power delivery, even under demanding conditions.</p>
                <h2>Conclusion</h2>
                <p>The Cooler Master MWE GOLD-V2 750W power supply offers high efficiency, reliable performance, and silent operation, making it an ideal choice for gaming PCs, workstations, and other high-performance systems. With its modular design, advanced protection features, and compact form factor, it provides the power and stability your system needs to excel in any task.</p>',
            ],
            [
                'ID' => 93,
                'NAME' => 'NZXT C1200 V2 1200W 80 Plus Gold',
                'PRICE' => 300.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 320.0,
                'DESCRIPTION' => '<h2>NZXT C1200 V2 1200W 80 Plus Gold Power Supply</h2>
                <p>The NZXT C1200 V2 1200W power supply is a high-performance unit designed to meet the demanding power requirements of enthusiast PC builds. With its 80 Plus Gold certification, robust construction, and advanced features, it delivers reliable and efficient power to your components, ensuring stable performance under heavy loads.</p>
                <h2>Efficiency and Certification</h2>
                <p>The NZXT C1200 V2 power supply boasts an 80 Plus Gold certification, which guarantees high energy efficiency of up to 90% at typical load conditions. This ensures that less energy is wasted as heat, reducing your electricity bill and minimizing environmental impact.</p>
                <h2>Modular Design</h2>
                <p>Featuring a fully modular design, the NZXT C1200 V2 allows you to connect only the cables you need for your system, reducing clutter and improving airflow inside your case. This modular design not only enhances the aesthetics of your build but also makes cable management easier and more efficient.</p>
                <h2>Smart Fan Control</h2>
                <p>The NZXT C1200 V2 is equipped with a smart fan control system that adjusts fan speed according to load and temperature, ensuring optimal cooling performance while minimizing noise. This allows for silent operation during low to moderate loads and ensures that the power supply remains cool and stable under heavy loads.</p>
                <h2>Advanced Protection Features</h2>
                <p>Designed with safety in mind, the NZXT C1200 V2 incorporates various protection features to safeguard your components from electrical hazards. These include over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP), ensuring reliable operation and peace of mind.</p>
                <h2>Compact and Durable Construction</h2>
                <p>The NZXT C1200 V2 features a compact and durable construction that fits seamlessly into most PC cases while providing long-term reliability. Its high-quality components and robust design ensure stable power delivery and consistent performance, even under demanding conditions.</p>
                <h2>Conclusion</h2>
                <p>The NZXT C1200 V2 1200W power supply offers high efficiency, modular design, and advanced protection features, making it an ideal choice for enthusiast PC builds. With its reliable performance, smart fan control, and compact form factor, it provides the power and stability needed to support high-performance components and demanding tasks.</p>',
            ],
            [
                'ID' => 94,
                'NAME' => 'KRUX Generator 850W 80 Plus Gold',
                'PRICE' => 120.0,
                'QUANTITIES_AVAILABLE' => 3,
                'SALE_ID' => null,
                'OLD_PRICE' => 125.0,
                'DESCRIPTION' => '<h2>KRUX Generator 850W 80 Plus Gold Power Supply</h2>
                <p>The KRUX Generator 850W power supply is a high-quality unit designed to meet the power demands of gaming PCs and enthusiast builds. With its 80 Plus Gold certification, advanced features, and robust construction, it delivers efficient and reliable power to your components, ensuring stable performance under heavy loads.</p>
                <h2>Efficiency and Certification</h2>
                <p>The KRUX Generator 850W power supply boasts an 80 Plus Gold certification, indicating high energy efficiency of up to 90% at typical load conditions. This certification ensures that the power supply operates with minimal wasted energy, reducing electricity costs and environmental impact.</p>
                <h2>Modular Design</h2>
                <p>Featuring a modular cable design, the KRUX Generator 850W allows you to connect only the cables you need for your system, reducing cable clutter and improving airflow inside your PC case. This modular design not only enhances the aesthetics of your build but also simplifies cable management, making installation easier and more efficient.</p>
                <h2>Smart Cooling System</h2>
                <p>The KRUX Generator 850W is equipped with a smart cooling system that automatically adjusts fan speed based on temperature and load, ensuring optimal cooling performance while minimizing noise levels. This intelligent fan control mechanism ensures quiet operation during normal use and provides additional cooling when needed under heavy loads.</p>
                <h2>Comprehensive Protection Features</h2>
                <p>Designed to protect your components from electrical hazards, the KRUX Generator 850W incorporates a range of advanced protection features. These include over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP), ensuring reliable operation and safeguarding your hardware investment.</p>
                <h2>Durable Construction</h2>
                <p>The KRUX Generator 850W power supply features a durable construction with high-quality components, ensuring long-term reliability and stability. Its robust design and efficient cooling system allow for continuous operation under demanding conditions, making it suitable for gaming, content creation, and other intensive tasks.</p>
                <h2>Conclusion</h2>
                <p>The KRUX Generator 850W 80 Plus Gold power supply offers high efficiency, modular design, and comprehensive protection features, making it an excellent choice for gaming PCs and enthusiast builds. With its reliable performance, smart cooling system, and durable construction, it provides the power and stability needed to support high-performance components and demanding applications.</p>',
            ],
            [
                'ID' => 95,
                'NAME' => 'Seasonic Focus GX 750W 80 Plus Gold',
                'PRICE' => 50.0,
                'QUANTITIES_AVAILABLE' => 4,
                'SALE_ID' => null,
                'OLD_PRICE' => 70.0,
                'DESCRIPTION' => '<h2>Seasonic Focus GX 750W 80 Plus Gold Power Supply</h2>
                <p>The Seasonic Focus GX 750W power supply is a high-quality unit designed to meet the demanding power requirements of gaming PCs, workstations, and enthusiast builds. With its 80 Plus Gold certification, advanced features, and reliable performance, it delivers efficient and stable power to your components, ensuring smooth operation even under heavy loads.</p>
                <h2>Efficiency and Certification</h2>
                <p>The Seasonic Focus GX 750W power supply boasts an 80 Plus Gold certification, indicating high energy efficiency of up to 90% at typical load conditions. This certification ensures that the power supply operates with minimal wasted energy, reducing electricity costs and environmental impact.</p>
                <h2>Modular Design</h2>
                <p>Featuring a fully modular cable design, the Seasonic Focus GX 750W allows you to connect only the cables you need for your system, reducing cable clutter and improving airflow inside your PC case. This modular design not only enhances the aesthetics of your build but also simplifies cable management, making installation easier and more efficient.</p>
                <h2>Hybrid Silent Fan Control</h2>
                <p>The Seasonic Focus GX 750W features a hybrid silent fan control system that automatically adjusts fan speed based on temperature and load, ensuring optimal cooling performance while minimizing noise levels. This intelligent fan control mechanism ensures quiet operation during normal use and provides additional cooling when needed under heavy loads.</p>
                <h2>Comprehensive Protection Features</h2>
                <p>Designed to protect your components from electrical hazards, the Seasonic Focus GX 750W incorporates a range of advanced protection features. These include over-voltage protection (OVP), under-voltage protection (UVP), over-power protection (OPP), short-circuit protection (SCP), and over-temperature protection (OTP), ensuring reliable operation and safeguarding your hardware investment.</p>
                <h2>Compact Size and High Build Quality</h2>
                <p>The Seasonic Focus GX 750W power supply features a compact size and high build quality, making it suitable for a wide range of PC builds. Its durable construction, premium components, and rigorous testing ensure long-term reliability and stability, making it an ideal choice for gaming, content creation, and other demanding applications.</p>
                <h2>Conclusion</h2>
                <p>The Seasonic Focus GX 750W 80 Plus Gold power supply offers high efficiency, modular design, and comprehensive protection features, making it an excellent choice for gaming PCs, workstations, and enthusiast builds. With its reliable performance, silent fan control, and compact size, it provides the power and stability needed to support high-performance components and demanding tasks.</p>',
            ],
            [
                'ID' => 96,
                'NAME' => 'AMD Ryzen 9 7900X',
                'PRICE' => 400.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 500.0,
                'DESCRIPTION' => '<h2>Unleash Unprecedented Power</h2>
                <p>Prepare to experience the pinnacle of computing performance with the AMD Ryzen 9 7900X processor. Featuring advanced Zen 4 architecture and cutting-edge manufacturing technology, this CPU redefines whats possible in gaming, content creation, and multitasking.</p>
                <h2>Dominate Every Task</h2>
                <p>With a whopping 16 high-performance cores and 32 threads, the Ryzen 9 7900X delivers unrivaled processing power to tackle even the most demanding workloads with ease. Whether youre rendering complex 3D scenes, editing high-resolution videos, or streaming your gameplay, this processor ensures smooth performance and responsiveness.</p>
                <h2>Next-Level Performance</h2>
                <p>Equipped with AMDs latest technologies, including Precision Boost 3 and Infinity Cache, the Ryzen 9 7900X offers blistering-fast clock speeds and reduced memory latency for a performance boost in gaming and multitasking sPRICErios. Say goodbye to bottlenecks and hello to seamless computing.</p>
                <h2>Efficiency Meets Power</h2>
                <p>Despite its incredible performance capabilities, the Ryzen 9 7900X remains energy-efficient thanks to AMDs advanced power management features. With support for PCIe 5.0 and DDR5 memory, it offers lightning-fast data transfer speeds for snappier system responsiveness and smoother overall performance.</p>
                <h2>Unrivaled Versatility</h2>
                <p>Whether youre a hardcore gamer, a professional content creator, or a multitasking powerhouse, the AMD Ryzen 9 7900X empowers you to achieve more than ever before. Dominate your competition, unleash your creativity, and elevate your computing experience to new heights with this exceptional CPU.</p>',
            ],
            [
                'ID' => 97,
                'NAME' => 'AMD Ryzen 7 7800X3D',
                'PRICE' => 332.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 345.0,
                'DESCRIPTION' => '<h2>Experience Next-Gen Performance</h2>
                <p>Step into the future of computing with the AMD Ryzen 7 7800X3D processor. Built on the cutting-edge Zen 4 architecture and fabricated using the latest manufacturing processes, this CPU delivers unparalleled performance for gaming, content creation, and multitasking.</p>
                <h2>Unleash Your Creativity</h2>
                <p>With 8 high-performance cores and 16 threads, the Ryzen 7 7800X3D offers lightning-fast processing power to handle even the most demanding tasks with ease. Whether youre editing videos, rendering 3D graphics, or streaming gameplay, this processor ensures smooth performance and responsiveness.</p>
                <h2>Revolutionary 3D V-Cache Technology</h2>
                <p>Equipped with revolutionary 3D V-Cache technology, the Ryzen 7 7800X3D pushes the boundaries of CPU performance. By stacking an extra layer of cache directly on the CPU die, it significantly enhances gaming performance, reducing latency and improving frame rates for a more immersive gaming experience.</p>
                <h2>Efficiency Redefined</h2>
                <p>Despite its incredible power, the Ryzen 7 7800X3D remains energy-efficient thanks to AMDs advanced power management technologies. With support for PCIe 4.0 and DDR5 memory, it offers blazing-fast data transfer speeds for faster loading times and smoother overall system performance.</p>
                <h2>Unlock Your Potential</h2>
                <p>Whether youre a hardcore gamer, a creative professional, or a multitasking enthusiast, the AMD Ryzen 7 7800X3D unlocks new levels of performance and productivity. Dominate your competition and take your computing experience to the next level with this powerhouse CPU.</p>',
            ],
            [
                'ID' => 98,
                'NAME' => 'AMD Ryzen 5 5600',
                'PRICE' => 120.0,
                'QUANTITIES_AVAILABLE' => 5,
                'SALE_ID' => null,
                'OLD_PRICE' => 140.0,
                'DESCRIPTION' => '<h2>Unleash Exceptional Performance</h2>
                <p>Experience the perfect blend of power and efficiency with the AMD Ryzen 5 5600 processor. Built on the revolutionary Zen 3 architecture and crafted with cutting-edge 7nm technology, this CPU delivers unparalleled performance for gaming, productivity, and beyond.</p>
                <h2>Seamless Multitasking</h2>
                <p>With 6 cores and 12 threads, the Ryzen 5 5600 is engineered to handle multitasking with ease. Whether youre streaming, gaming, or tackling productivity tasks, this processor delivers smooth and responsive performance, allowing you to effortlessly switch between applications without missing a beat.</p>
                <h2>Boost Your Gaming Experience</h2>
                <p>Equipped with AMDs Precision Boost 2 technology, the Ryzen 5 5600 dynamically adjusts clock speeds to optimize performance in gaming sPRICErios. Combined with support for PCIe 4.0 and fast DDR4 memory, youll enjoy lightning-fast load times, immersive gameplay, and fluid frame rates.</p>
                <h2>Efficiency Redefined</h2>
                <p>Despite its formidable performance capabilities, the Ryzen 5 5600 remains energy-efficient, thanks to its advanced power management features. With lower power consumption and reduced heat output, this processor offers a cooler and quieter computing experience without compromising on performance.</p>
                <h2>Unlock Your Potential</h2>
                <p>Whether youre a gamer, content creator, or power user, the AMD Ryzen 5 5600 unlocks new levels of performance and versatility. Elevate your computing experience, unleash your creativity, and conquer every task with confidence with this exceptional CPU at the heart of your system.</p>',
            ],
            [
                'ID' => 99,
                'NAME' => 'AMD Ryzen 5 7600X',
                'PRICE' => 190.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 200.0,
                'DESCRIPTION' => '<h2>Unleash Unrivaled Performance</h2>
                <p>Introducing the AMD Ryzen 5 7600X, a powerhouse processor designed to revolutionize your computing experience. Built on the innovative Zen 3 architecture and engineered with cutting-edge 7nm technology, this CPU delivers exceptional performance and efficiency for gaming, content creation, and multitasking.</p>
                <h2>Effortless Multitasking</h2>
                <p>With 8 cores and 16 threads, the Ryzen 5 7600X is engineered to handle demanding multitasking sPRICErios with ease. Seamlessly switch between applications, stream, edit videos, and tackle heavy workloads without sacrificing performance or responsiveness.</p>
                <h2>Elevate Your Gaming Experience</h2>
                <p>Equipped with AMDs Precision Boost 2 technology, the Ryzen 5 7600X dynamically adjusts clock speeds to deliver optimal performance in gaming environments. Paired with support for PCIe 4.0 and high-speed DDR4 memory, this processor ensures smooth gameplay, faster load times, and immersive visuals.</p>
                <h2>Efficiency Meets Power</h2>
                <p>Despite its incredible performance capabilities, the Ryzen 5 7600X remains energy-efficient, thanks to advanced power management features. Experience lower power consumption and reduced heat output, allowing for quieter operation and cooler temperatures even during intense gaming sessions.</p>
                <h2>Unleash Your Creativity</h2>
                <p>Whether youre a gamer, content creator, or power user, the AMD Ryzen 5 7600X empowers you to unleash your creativity and achieve more. Elevate your productivity, unlock new gaming horizons, and conquer every task with confidence with this exceptional CPU powering your system.</p>',
            ],
            [
                'ID' => 100,
                'NAME' => 'AMD Ryzen 5 8600G',
                'PRICE' => 210.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 270.0,
                'DESCRIPTION' => '<h2>Unleash Exceptional Performance</h2>
                <p>Introducing the AMD Ryzen 5 8600G, a powerful processor engineered to redefine your computing experience. Built on the innovative Zen 3 architecture and crafted with cutting-edge 7nm technology, this CPU delivers unparalleled performance and efficiency for gaming, content creation, and multitasking.</p>
                <h2>Seamless Multitasking</h2>
                <p>Featuring 6 cores and 12 threads, the Ryzen 5 8600G is designed to effortlessly handle demanding multitasking sPRICErios. Switch between applications, stream content, edit videos, and tackle intensive workloads with ease, all without compromising on performance or responsiveness.</p>
                <h2>Elevate Your Gaming</h2>
                <p>Equipped with AMDs Precision Boost 2 technology, the Ryzen 5 8600G dynamically adjusts clock speeds to deliver optimal gaming performance. With support for PCIe 4.0 and high-speed DDR4 memory, experience smooth gameplay, reduced loading times, and stunning visuals that immerse you in your favorite games.</p>
                <h2>Efficiency and Power</h2>
                <p>Despite its impressive performance capabilities, the Ryzen 5 8600G remains energy-efficient, thanks to advanced power management features. Experience lower power consumption and reduced heat output, ensuring quieter operation and cooler temperatures even during intense gaming sessions.</p>
                <h2>Unleash Your Creativity</h2>
                <p>Whether youre a gamer, content creator, or power user, the AMD Ryzen 5 8600G empowers you to unleash your creativity and achieve more. Boost your productivity, unlock new gaming possibilities, and conquer every task with confidence, knowing that this exceptional CPU is driving your system forward.</p>',
            ],
            [
                'ID' => 101,
                'NAME' => 'Intel Core i5-13400F',
                'PRICE' => 150.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 170.0,
                'DESCRIPTION' => '<h2>Next-Level Performance</h2>
                <p>Meet the Intel Core i5-13400F, a powerhouse processor designed to take your computing experience to the next level. Built on Intels advanced 12th generation Alder Lake architecture, this CPU delivers exceptional performance and responsiveness for gaming, productivity, and multitasking.</p>
                <h2>Efficient Multithreading</h2>
                <p>With 6 cores and 12 threads, the Core i5-13400F offers impressive multitasking capabilities, allowing you to effortlessly handle demanding workloads and applications. Experience smooth performance whether youre gaming, streaming, editing videos, or running multiple tasks simultaneously.</p>
                <h2>Boosted Gaming Experience</h2>
                <p>Equipped with Intel Turbo Boost Max Technology 3.0, the Core i5-13400F automatically increases clock speeds to deliver enhanced gaming performance when you need it most. Enjoy faster frame rates, reduced input lag, and smoother gameplay for an immersive gaming experience.</p>
                <h2>Enhanced Connectivity</h2>
                <p>Featuring PCIe Gen 5 and DDR5 memory support, the Core i5-13400F ensures lightning-fast data transfer speeds and improved system responsiveness. Connect high-speed peripherals, upgrade to the latest memory technology, and unlock new levels of performance for your gaming rig.</p>
                <h2>Intelligent Power Management</h2>
                <p>With Intels Enhanced SpeedStep and Deep Sleep technologies, the Core i5-13400F optimizes power efficiency without sacrificing performance. Enjoy longer battery life on laptops and lower power consumption on desktops, ensuring a greener computing experience.</p>
                <h2>Unleash Your Creativity</h2>
                <p>Whether youre a gamer, content creator, or everyday user, the Intel Core i5-13400F empowers you to unleash your creativity and achieve more. From gaming to content creation and everything in between, this powerful CPU enables you to do it all with ease.</p>',
            ],
            [
                'ID' => 102,
                'NAME' => 'Intel Core i9-13900KF',
                'PRICE' => 500.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 700.0,
                'DESCRIPTION' => '<h2>Unmatched Performance</h2>
                <p>Introducing the Intel Core i9-13900KF, a high-performance processor designed to push the boundaries of computing. Built on Intels cutting-edge 12th generation Alder Lake architecture, this CPU delivers unparalleled performance for gaming, content creation, and heavy multitasking.</p>
                <h2>Exceptional Multithreading</h2>
                <p>With 12 cores and 24 threads, the Core i9-13900KF offers exceptional multithreading capabilities, allowing you to breeze through demanding tasks with ease. Whether youre editing videos, rendering 3D graphics, or streaming gameplay, this processor provides the power you need to stay productive.</p>
                <h2>Unleash Gaming Potential</h2>
                <p>Equipped with Intel Turbo Boost Max Technology 3.0, the Core i9-13900KF delivers incredible gaming performance, ensuring smooth frame rates and responsive gameplay even in the most demanding titles. Experience gaming like never before with this powerhouse CPU.</p>
                <h2>Next-Gen Connectivity</h2>
                <p>Featuring PCIe Gen 5 and DDR5 memory support, the Core i9-13900KF offers lightning-fast data transfer speeds and improved system responsiveness. Connect high-speed peripherals, upgrade to the latest memory technology, and take your computing experience to new heights.</p>
                <h2>Efficient Power Management</h2>
                <p>With Intels Enhanced SpeedStep and Deep Sleep technologies, the Core i9-13900KF optimizes power efficiency without compromising performance. Enjoy longer battery life on laptops and reduced power consumption on desktops, ensuring a more energy-efficient computing experience.</p>
                <h2>Unrivaled Productivity</h2>
                <p>Whether youre gaming, creating content, or tackling everyday tasks, the Intel Core i9-13900KF empowers you to unleash your creativity and accomplish more. From gaming to content creation and everything in between, this powerful CPU enables you to do it all with unmatched speed and efficiency.</p>',
            ],
            [
                'ID' => 103,
                'NAME' => 'Intel Core i7-13700',
                'PRICE' => 500.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 600.0,
                'DESCRIPTION' => '<h2>Unleash Your Potential</h2>
                <p>Introducing the Intel Core i7-13700, a high-performance processor designed to elevate your computing experience to new heights. Built on Intels cutting-edge 12th generation Alder Lake architecture, this CPU delivers exceptional performance for both productivity and gaming tasks.</p>
                <h2>Powerful Multitasking</h2>
                <p>With 8 cores and 16 threads, the Core i7-13700 offers powerful multitasking capabilities, allowing you to tackle demanding workloads with ease. Whether youre running multiple applications simultaneously or streaming content while gaming, this processor delivers smooth and responsive performance.</p>
                <h2>Enhanced Gaming Experience</h2>
                <p>Equipped with Intel Turbo Boost Max Technology 3.0, the Core i7-13700 ensures a seamless gaming experience with high frame rates and low latency. Enjoy immersive gaming sessions with stunning visuals and responsive gameplay, thanks to the power of this CPU.</p>
                <h2>Next-Gen Connectivity</h2>
                <p>Featuring support for PCIe Gen 5 and DDR5 memory, the Core i7-13700 offers lightning-fast data transfer speeds and improved system responsiveness. Connect high-speed storage devices, upgrade to the latest memory technology, and experience faster load times and smoother performance.</p>
                <h2>Efficient Power Management</h2>
                <p>With Intels Enhanced SpeedStep and Deep Sleep technologies, the Core i7-13700 optimizes power efficiency without sacrificing performance. Enjoy longer battery life on laptops and reduced power consumption on desktops, ensuring a more energy-efficient computing experience.</p>
                <h2>Unrivaled Performance</h2>
                <p>Whether youre gaming, streaming, or creating content, the Intel Core i7-13700 empowers you to unleash your creativity and accomplish more. With its powerful combination of performance and efficiency, this CPU delivers the speed and responsiveness you need to excel in any task.</p>',
            ],
            [
                'ID' => 104,
                'NAME' => 'Intel Core i9-13900K',
                'PRICE' => 550.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 580.0,
                'DESCRIPTION' => '<h2>Unleash Unprecedented Power</h2>
                <p>Introducing the Intel Core i9-13900K, the pinnacle of performance in Intels 12th generation Alder Lake lineup. Designed for enthusiasts and power users, this CPU delivers unparalleled power and speed to handle the most demanding tasks with ease.</p>
                <h2>Unmatched Processing Power</h2>
                <p>With 16 cores and 24 threads, the Core i9-13900K redefines whats possible in computing. Experience lightning-fast performance and seamless multitasking, whether youre gaming, streaming, or creating content. Take your productivity to new heights and accomplish more in less time.</p>
                <h2>Boosted Gaming Performance</h2>
                <p>Equipped with Intel Turbo Boost Max Technology 3.0, the Core i9-13900K unleashes maximum gaming performance when you need it most. Enjoy smooth gameplay, high frame rates, and immersive visuals, even in the most demanding AAA titles.</p>
                <h2>Next-Generation Connectivity</h2>
                <p>With support for PCIe Gen 5 and DDR5 memory, the Core i9-13900K offers blazing-fast data transfer speeds and ultra-low latency. Connect high-speed storage devices, upgrade to the latest memory technology, and experience unparalleled responsiveness in every application.</p>
                <h2>Efficient Thermal Design</h2>
                <p>Featuring Intels advanced thermal design, the Core i9-13900K ensures optimal heat dissipation and temperature management under heavy workloads. Keep your system cool and stable, even during extended gaming sessions or intense content creation tasks.</p>
                <h2>Unleash Your Creativity</h2>
                <p>Whether youre editing videos, rendering 3D models, or compiling code, the Core i9-13900K empowers you to unleash your creativity without compromise. Experience unparalleled performance and responsiveness, and take your work to the next level.</p>
                <h2>Unlock Your Potential</h2>
                <p>With the Intel Core i9-13900K, the possibilities are limitless. Push the boundaries of performance, unleash your creativity, and unlock new opportunities in gaming, content creation, and beyond. Experience the ultimate in desktop computing power with the Core i9-13900K.</p>',
            ],
            [
                'ID' => 105,
                'NAME' => 'Intel Core i3-13100',
                'PRICE' => 200.0,
                'QUANTITIES_AVAILABLE' => 6,
                'SALE_ID' => null,
                'OLD_PRICE' => 300.0,
                'DESCRIPTION' => '<h2>Next-Level Performance</h2>
                <p>Meet the Intel Core i3-13100, a powerhouse processor designed to elevate your computing experience to the next level. With impressive performance and advanced features, this CPU is perfect for productivity, gaming, and everyday tasks.</p>
                <h2>Smooth Multitasking</h2>
                <p>Equipped with 4 cores and 8 threads, the Core i3-13100 delivers smooth multitasking performance, allowing you to breeze through everyday tasks with ease. Whether youre browsing the web, streaming content, or working on office applications, this processor ensures responsive performance.</p>
                <h2>Enhanced Gaming Experience</h2>
                <p>Experience immersive gaming like never before with the Intel Core i3-13100. With support for Intel Hyper-Threading Technology, this processor delivers improved gaming performance, allowing you to enjoy smoother gameplay and faster frame rates in your favorite titles.</p>
                <h2>Efficient Power Consumption</h2>
                <p>Thanks to Intels advanced manufacturing process, the Core i3-13100 delivers impressive performance while maintaining efficient power consumption. Enjoy long battery life on laptops or lower energy bills on desktops, without compromising on performance.</p>
                <h2>Integrated Graphics</h2>
                <p>The Core i3-13100 features integrated Intel UHD Graphics, providing crisp visuals and smooth video playback for multimedia tasks. Whether youre watching movies, editing photos, or browsing the web, this processor delivers stunning visuals with ease.</p>
                <h2>Advanced Connectivity</h2>
                <p>With support for the latest connectivity standards, including PCIe Gen 4 and DDR5 memory, the Core i3-13100 ensures blazing-fast data transfer speeds and ultra-low latency. Connect high-speed storage devices, upgrade to the latest memory technology, and experience responsive performance in every application.</p>
                <h2>Upgrade Your Experience</h2>
                <p>Upgrade to the Intel Core i3-13100 and experience a new level of performance, efficiency, and responsiveness. Whether youre a casual user, a content creator, or a gamer, this processor delivers the performance you need to tackle any task with confidence.</p>',
            ],
        ]);
        $this->command->info('Records were successfully added to the database. Seeders are correct.');
    }
}
