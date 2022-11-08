import Slider from "@/components/Slider";
import PageLayout from "@/Layouts/PageLayout";

export default function Home() {
    return (
        <PageLayout>
            <div className="space-y-10">
                <Slider />

                <div className="p-5 md:p-24 text-center space-y-5">
                    <h1 className="text-4xl md:text-5xl">Welcome</h1>
                    <p className="md:text-2xl">
                        The government's intervention in the Agro - allied sector must essentially be aimed at creating the right environment for rapid expansion of locally - owned enterprises. However, there are serious challenges in this direction. Industries processing of agricultural product are almost negligible, existing standards being very basic and often incomparable with export requirements. Post - harvest losses are also very high, assesses at near 50% of total production. (Van Buren) Labour saving production and advanced harvesting and processing technologies are therefore critical for sustained revival of Nigerians Agriculture.
                    </p>
                </div>

                <div className="relative skew-y-1 bg-black overflow-hidden">

                    <img src="/slideshow/grains.jpg" className="absolute left-0 top-0 scale-110 -z-10 opacity-50 h-full w-full object-fill" alt="" />

                    <div className="md:w-1/2 bg-green-500/60 px-5 py-10 md:p-24 md:float-right">
                        <div className="-skew-y-3 space-y-10">
                            <h1 className="text-4xl font-black">What We Do</h1>
                            <p className="text-2xl font-bold">
                                Importation and
                                exportation of agro allied products is our first objective, We are also into
                                drilling of borehole and equipping, supply of agricultural and agro allied
                                products, manufacturer's representatives for companies and indvidual
                                proprietors, general contractors, buying and selling of general goods and
                                services, importer, exporter of retails on building matenal, dealers on
                                furniture and general merchandising
                            </p>
                        </div>
                    </div>
                </div>

                <div className="">

                </div>
            </div>
        </PageLayout>
    )
}
