import Avatar from "../Atomos/Avatar"
import Button from "../Atomos/Button"

interface MemberCardProps {
  name: string
  role: string
  description: string
  gradient: string
}

export default function MemberCard({
  name,
  role,
  description,
  gradient,
}: MemberCardProps) {
  return (
    <div className="bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-lg">
      <div className="flex items-center gap-4 mb-4">
        <Avatar gradient={gradient} />
        <div>
          <h2 className="text-xl font-semibold">{name}</h2>
          <p className="text-gray-400 text-sm">{role}</p>
        </div>
      </div>

      <p className="text-gray-300 text-sm mb-4">{description}</p>

      <Button className="w-full bg-gray-700 hover:bg-gray-600 text-sm">
        Ver Perfil
      </Button>
    </div>
  )
}
