@extends("layouts.app")

@section("content")


    <header class="mt-[70px] py-10 px-5 bg-zinc-100 min-h-[70vh] flex items-center justify-center">
        <div class="max-w-[900px] mx-auto">
            <div class="flex flex-col gap-5 items-center text-center">
                <h1 class="text-3xl md:text-5xl font-bold text-indigo-800 text-center md:leading-[60px]">
                    Empowering People To Move Their Dreams Forward
                </h1>

                <p class="md:text-lg text-center font-light">
                    BY NAGRO ALLIED NIGERIALIMITED was incorperatedin June 2017 to
                    ‘engage in farming end all form of agricultural busines. Importation ang
                    ‘exportation of aa aled products s our frst objecve. We are aso into
                    ‘tiling of borehole and equipping, supely of agneutural and aaro aliod
                    produ, manufacturer's representatives for companies andindvidual
                    Dropnetors, general contractors, buying and seling of general goods end
                    Services, mporter, exporter of retas on buldng materia, dealers on
                    future and genéral merchandising
                </p>

                <p class="text-sm px-5 py-2 rounded-full border border-primary">
                    <i class="bi bi-megaphone mr-2 text-indigo-700"></i>
                    this is an announcement from BYN AGRO
                    <a href="#" class="ml-2 text-indigo-700 hover:underline">Read More <i class="bi bi-arrow-right"></i></a>
                </p>
            </div>
        </div>
    </header>

    <div class="grid md:grid-cols-2 gap-5 md:gap-10 max-w-[1000px] mx-auto px-5 py-10 md:py-24">
        <div class="space-y-5 font-light">
            <h1 class="uppercase text-2xl font-bold text-indigo-800">BYN AGRO ALLIED NIGERIALIMITED</h1>
            <p class="">
                BY NAGRO ALLIED NIGERIALIMITED was incorperatedin June 2017 to
                ‘engage in farming end all form of agricultural busines. Importation ang
                ‘exportation of aa aled products s our frst objecve. We are aso into
                ‘tiling of borehole and equipping, supely of agneutural and aaro aliod
                produ, manufacturer's representatives for companies andindvidual
                Dropnetors, general contractors, buying and seling of general goods end
                Services, mporter, exporter of retas on buldng materia, dealers on
                future and genéral merchandising
            </p>
            <p>
                ‘As aregstered member of Nigeria export promaton council (NEPC). We
                {ate positoned to export standard agricultural products from Nigeria to cther
                ar of the werld, as ran material for futher processing, We have over 100,
                hectares of fete aricutural land stuated at southern part of he stat,
                ‘whore we basicaly cutiated cash crops. We alvays involve professional in
                ‘Ur peachce to make sure environmental protecten procedure are
                ‘maintained dunng our operations Animal husbandry practice take some
                Important pan of eur cperanon. Wie have aso capaci. n engation farming
                wath idea fo cover complete al he year with farming practice, Our farm ste
                Isvery accessible to ary nteiocutors that are ready" to pay a visi” other
                for them to buld a stong relationship wih us on agro alied operations.
                (Our Vision
            </p>
            <h1 class="uppercase text-2xl font-bold text-indigo-800">our vision</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit similique tenetur in. Animi ducimus
                voluptatum mollitia odit recusandae suscipit atque,
                temporibus alias dolorem ex cupiditate, repellat, nostrum nobis sit quis?
            </p>

            <h1 class="uppercase text-2xl font-bold text-indigo-800">our mission</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit similique tenetur in. Animi ducimus
                voluptatum mollitia odit recusandae suscipit atque,
                temporibus alias dolorem ex cupiditate, repellat, nostrum nobis sit quis?
            </p>
        </div>
        <div class="hidden md:block">
            <div class="w-full h-full bg-zinc-100 rounded-xl border"></div>
        </div>
    </div>

    <div class="bg-zinc-100">
        <div class="max-w-[1000px] mx-auto px-5 py-10 md:py-24">
            <h1 class="text-center text-3xl font-bold text-indigo-800">Gallery</h1>
            <p class="text-center md:w-2/3 mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ea
                voluptatibus dolores in amet autem delectus architecto quos praesentium soluta.
            </p>
            <div class="grid md:grid-cols-4 md:grid-rows-4 mt-5 gap-5">
                <div class="md:col-span-2 bg-zinc-200 rounded-lg p-24"></div>
                <div class="md:col-span-2 md:row-span-2 bg-zinc-200 rounded-lg p-24"></div>
                <div class="md:row-span-2 bg-zinc-200 rounded-lg p-24"></div>
                <div class=" bg-zinc-200 rounded-lg p-24"></div>
                <div class="bg-zinc-200 rounded-lg p-24"></div>
                <div class="bg-zinc-200 rounded-lg p-24"></div>
                <div class="bg-zinc-200 rounded-lg p-24"></div>
            </div>
        </div>
    </div>

    <div class="bg-zinc-50">
        <div class="max-w-[1200px] mx-auto px-5 py-10 md:py-24">
            <h1 class="text-center text-3xl font-bold text-indigo-800">Profile</h1>
            <p class="text-center md:w-2/3 mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ea
                voluptatibus dolores in amet autem delectus architecto quos praesentium soluta.
            </p>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-5 gap-5">
                <div class="rounded-xl overflow-hidden" v-for="i in 6">
                    <div class="bg-sky-200 h-[250px]"></div>
                    <div class="p-3 bg-white">
                        <h3 class="font-bold capitalize">Usman Muhammad Busari</h3>
                        <p class="capitalize text-sm">SOftware Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
