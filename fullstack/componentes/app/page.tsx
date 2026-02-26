import Title from "./components/Atomos/Title"
import Searchbar from "./components/Moleculas/Searchbar"
import MemberCard from "./components/Moleculas/MemberCard"


export default function ComunidadePage() {
  return (
    <div className="min-h-screen bg-gray-900 p-8 text-white">
      <header className="flex justify-between items-center mb-10">
        <Title>Membros do Grupo</Title>
        <Searchbar />
      </header>

      <main className="grid grid-cols-1 md:grid-cols-3 gap-6">
        <MemberCard
          name="Ana Silva"
          role="Full-stack Developer"
          description="Especialista em React e Node.js. Adora café e Docker."
          gradient="from-blue-500 to-purple-500"
        />

        <MemberCard
          name="Bruno Costa"
          role="UI/UX Designer"
          description="Focado em acessibilidade e design systems escaláveis."
          gradient="from-green-500 to-teal-500"
        />

        <MemberCard
          name="Carla Dias"
          role="DevOps Engineer"
          description="Mestre em Kubernetes e automação de pipelines CI/CD."
          gradient="from-orange-500 to-red-500"
        />
      </main>

      <footer className="mt-12 text-center text-gray-500 text-xs">
        <p>© 2026 - Engenharia de Software - Full-Stack Class</p>
      </footer>
    </div>
  )
}
