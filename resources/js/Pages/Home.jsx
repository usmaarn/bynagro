import Slider from "@/components/Slider";
import PageLayout from "@/Layouts/PageLayout";

export default function Home() {
    return (
        <PageLayout>
            <Slider />
            <div className="p-5 text-center space-y-5">
                <h1 className="text-3xl">Welcome</h1>
                <p className="text-xl">
                    The government's intervention in the Agro - allied sector must essentially be aimed at creating the right environment for rapid expansion of locally - owned enterprises. However, there are serious challenges in this direction. Industries processing of agricultural product are almost negligible, existing standards being very basic and often incomparable with export requirements. Post - harvest losses are also very high, assesses at near 50% of total production. (Van Buren) Labour saving production and advanced harvesting and processing technologies are therefore critical for sustained revival of Nigerians Agriculture.
                </p>
            </div>
        </PageLayout>
    )
}
