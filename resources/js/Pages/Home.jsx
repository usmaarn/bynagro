import Slider from "@/components/Slider";
import PageLayout from "@/Layouts/PageLayout";
import { useEffect } from "react";

import {MdLabelImportantOutline} from 'react-icons/md';

export default function Home() {

    useEffect(() => {
        if(typeof window != 'undefined'){
            let slides = document.querySelectorAll('.load-img');
            slides.forEach(slide => {
                let img = slide.getAttribute("data-src");
                slide.src = img;
            })
        }
    })

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

                <div className="p-5 md:px-24">
                    <h1 className="text-2xl text-center font-black">Our Services</h1>

                    <div className="grid grid-cols-3 gap-5">
                        <div className="">
                            <h1>
                                <MdLabelImportantOutline />
                                <span> Importation and exportation of agro allied products</span>
                            </h1>
                        </div>

                        <div className="">
                            <h1>
                                <MdLabelImportantOutline />
                                <span>  drilling of borehole and equipping</span>
                            </h1>
                        </div>

                        <div className="">
                            <h1>
                                <MdLabelImportantOutline />
                                <span> supply of agricultural and agro allied products</span>
                            </h1>
                        </div>

                        <div className="">
                            <h1>
                                <MdLabelImportantOutline />
                                <span> manufacturer's representatives for companies and indvidual proprietors</span>
                            </h1>
                        </div>
                         <div className="">
                            <h1>
                                <MdLabelImportantOutline />
                                <span>  general contractors</span>
                            </h1>
                        </div>
                         <div className="">
                            <h1>
                                <MdLabelImportantOutline />
                                <span> buying and selling of general goods and services</span>
                            </h1>
                        </div>
                         <div className="">
                            <h1>
                                <MdLabelImportantOutline />
                                <span> importer and exporter of retails on building matenal</span>
                            </h1>
                        </div>
                         <div className="">
                            <h1>
                                <MdLabelImportantOutline />
                                <span> furniture and general merchandising</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <div className="">

                </div>
            </div>
        </PageLayout>
    )
}
